<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

    // public function index()
    // {
        
    //     $data['result'] = $this->db->select('id, title, created_at')
    //                                 ->from('news')
    //                                 ->order_by('id','desc')
    //                                 ->get();

	// 	$this->load->view('news/datalist',$data);
    // }
    
    // public function save_json()
    // {
    //     $row_data['title'] = $this->input->post('title');
    //     $row_data['created_at'] = $this->input->post('created_at');
    //     $row_data['status'] = $this->input->post('status');
    //     $row_data['content'] = $this->input->post('content');


    //     if($row_data['title']!='' && $row_data['content']!=''){
    //         $this->db->insert('news',$row_data);

    //         $data['success'] = true;
    //         $data['msg'] = '新增成功';
    //     }else{
    //         $data['success'] = false;
    //         $data['msg'] = '新增失敗';
    //     }
        
    //     echo json_encode($data);
        
    // }

    public function test(){
        //$data['amount'] = 20;
        $email = $this->input->post('email');
        $currency_tobuy = $this->input->post('currency_tobuy');
        $currency_topay = $this->input->post('currency_topay');
        $amount = $this->input->post('amount');
        
        $data['amount'] = $amount;
        $data['email'] = $email;
        $data['currency_tobuy'] = $currency_tobuy;
        $data['currency_topay'] = $currency_topay;
        $data['price_data'] = $this->get_price();

        //$api_data['Mode'] = 'InvestReward';
        //$data['record'] =  $this->oauth->auth_request('UiTransactionRecord','GET',$api_data);
        
        // $data['result'] = $this->db->select('id, name, symbol, quote')
        //                             ->from('news')
        //                             ->order_by('id','desc')
        //                             ->get();

        $this->load->view('mail_template/price_mail',$data);
    }

    public function send()
    {
        //$data = $this->load_default();
        if (! $this->input->is_ajax_request()) {
            redirect(base_url(), 'refresh');
            exit;            
        }
        //if(in_array('normal',$data['permission']))
        //{
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $currency_tobuy = $this->input->post('currency_tobuy');
            $currency_topay = $this->input->post('currency_topay');
            $amount = $this->input->post('amount');
            $note = $this->input->post('note');

            $return['success'] = false;
            if($email!='' && $phone!='' && $amount!='' && $currency_tobuy!='' && $currency_topay!=''){
                
                
                $this->load->model('mail_model');
                $mail_info['subject']= '報價單';

                $data['subject']= '報價單';

                $data['price_data'] = $this->get_price();
                $data['email'] = $email;
                $data['phone'] = $phone;
                $data['amount'] = $amount;
                $data['currency_tobuy'] = $currency_tobuy;
                $data['currency_topay'] = $currency_topay;
                $data['note'] = $note;
                $data['content'] = '以下是報價單及轉帳地址';
                $mail_info['body']= $this->load->view('mail_template/price_mail',$data,true);

                
                $mail_info['to']='quote@tradecoin4u.com';
                $mail_info['to_name']='';
                $send_status=$this->mail_model->send($mail_info);


                $return['msg'] = '報價資料已發送!';
                $return['success'] = true;
            }else{
                $return['msg'] = '請填寫必要資訊';
            }

            echo json_encode($return);

        //inset data to database

            $this->load->database();
        
            $row_data['email'] = $this->input->post('email');
            $row_data['phone'] = $this->input->post('phone');
            $row_data['currency_tobuy'] = $this->input->post('currency_tobuy');
            $row_data['currency_topay'] = $this->input->post('currency_topay');
            $row_data['amount'] = $this->input->post('amount');
            $row_data['note'] = $this->input->post('note');
    
            if($row_data['email']!='' && $row_data['phone']!=''){
                $this->db->insert('quote',$row_data);
            }else{
            }

    }
    public function get_price()
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
            'start' => '1',
            'limit' => '20',
            'convert' => 'USD'
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 54a965c2-776c-47dc-81d1-f65f44157a80'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL


        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,            // set the request URL
            CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1,         // ask for raw response instead of bool
            CURLOPT_SSL_VERIFYPEER => false      // must additional add this 
        ));

        $response = curl_exec($curl); // Send the request, save the response
        //print_r(json_decode($response, true)); // print json decoded response
        curl_close($curl); // Close request

        $result = json_decode($response, true);
       
        $rows = array();
        foreach($result['data'] as $row):
            //echo $row['symbol'].':'.$row['quote']['USD']['price'].'<br />';
            //echo $row['last_updated'].'<br />';
            $rows[$row['symbol']] = $row['quote']['USD']['price'];
            //$rows[$row['last_updated']] = $row['quote']['USD']['last_updated'] ;
            log_message('error',$row['symbol'].':'.$row['quote']['USD']['price']);
        endforeach;

        return $rows;
    }
}
