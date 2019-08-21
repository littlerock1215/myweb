<?php
use GuzzleHttp\Exception\RequestException;

class Oauth_model extends CI_Model {
    //private $api_url = 'http://34.80.194.175:9001';
    private $api_url = 'http://34.80.194.175:9004';
    
    private $provider;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // Your own constructor code
        include(APPPATH.'/third_party/vendor/autoload.php');
        $this->provider = new \League\OAuth2\Client\Provider\GenericProvider([
            'urlAuthorize'            => $this->api_url.'/authorize',
            'urlAccessToken'          => $this->api_url.'/token',
            'urlResourceOwnerDetails' => $this->api_url.'/resource'
        ]);
    }
    private function get_token($refresh = false){
        try {
            //get token
            $this->load->library('session');
            $existingAccessToken = $this->session->userdata('user_token');

            if($existingAccessToken!=null && $existingAccessToken!=''){
                $existingAccessToken = json_decode($existingAccessToken,true);

                $existingAccessToken = new \League\OAuth2\Client\Token\AccessToken($existingAccessToken);
                if ($existingAccessToken->hasExpired() || $refresh) {
                    $token = $this->provider->getAccessToken('refresh_token', [
                        'refresh_token' => $existingAccessToken->getRefreshToken()
                    ]);
                    $setdata=array('token'=>$token);
                    $this->load->library('session');
                    $this->session->set_userdata($setdata);
                }else{
                    $token = $existingAccessToken;
                }
            }else{
                $token = '';
            }
            return $token;

        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

            // Failed to get the access token
            log_message('error',$e->getMessage());
            return '';
        }
    }
    function login($data){
        $token = $this->get_token();
        if($token!='') {
            //already logged in
            $result['success'] = true;

            return $result;
        }else {
            try {
                //login
                $token = $this->provider->getAccessToken('password', $data);

                $setdata = array('user_token' => json_encode($token));
                $this->load->library('session');
                $this->session->set_userdata($setdata);
                $result['success'] = true;

                return $result;
            } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
                $response = $e->getResponseBody();

                $result['msg'] = $response['error_description'];
                $result['success'] = false;
                log_message('error','E1:'.json_encode($response));
                return $result;
            } catch (Exception $e) {
                log_message('error', 'login oauth E2:' . $e->getMessage());

                $result['success'] = false;
                return $result;
            }
        }
    }
    function get_user_info(){
        $body = $this->auth_request('GetAccountData','GET','');
            
        $setdata = array('user_info' => $body);
        $this->load->library('session');
        $this->session->set_userdata($setdata);

        return $body;
    }
    function auth_request($this_url,$method,$data){
        try {
            $token = $this->get_token();

            $body = $data;

            $options['body'] = json_encode($body);
            $options['headers']['content-type'] = 'application/json';

            $request = $this->provider->getAuthenticatedRequest(
                $method,
                $this->api_url.'/api/AvaAPI/'.$this_url,
                $token,
                $options
            );//
            $response = $this->provider->getResponse($request);
            $body = json_decode($response->getBody(),true);

            
            return $body;
        }catch (RequestException $e) {
            // To catch exactly error 400 use
            if ($e->getResponse()->getStatusCode() == '400') {
                $response = $e->getResponse();
                $body = json_decode($response->getBody(),true);
                
                return $body;
            }
        }
    }
    function url_request($this_url,$method,$data){
        try {
            $body = $data;

            $options['body'] = json_encode($body);
            $options['headers']['content-type'] = 'application/json';
            $options['http_errors'] = false;
            $request = $this->provider->getRequest(
                $method,
                $this->api_url.'/api/AvaAPI/'.$this_url,
                $options
            );//
            $response = $this->provider->getResponse($request);
            //log_message('error','r:'.$response->getBody());
            $body = json_decode($response->getBody(),true);

            return $body;

        } catch (RequestException $e) {
            // To catch exactly error 400 use
            if ($e->getResponse()->getStatusCode() == '400') {
                $response = $e->getResponse();
                //log_message('error','e:'.$response->getBody());
                $body = json_decode($response->getBody(),true);

                return $body;
            }
        }catch(Exception $e){
            log_message('error','e:'.$e->getMessage());
        }
    }
    function buildQueryString(array $params)
    {
        return http_build_query($params, null, '&', \PHP_QUERY_RFC3986);
    }
}
?>