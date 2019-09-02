<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['price_data'] = $this->get_price();
		$this->load->view('home',$data);
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
       
        $ratio = $this->get_ratio();

        $rows = array();
        foreach($result['data'] as $row):

            $new_hkd = $this->to_HKD($row['quote']['USD']['price'], $ratio);
            $rows[$row['symbol']]['sell'] = $new_hkd + 50;
			$rows[$row['symbol']]['buy'] = $new_hkd;
            
        endforeach;

        return $rows;
    }

	private function to_HKD($price, $ratio){

		$hkd = $price*$ratio;

		return $hkd;
    }
    
    public function get_ratio()
    {
        $url = 'http://34.80.194.175:9003/api/AvaAPI/GetUSDHKDPrice';


        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,            // set the request URL
            //CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1,         // ask for raw response instead of bool
            CURLOPT_SSL_VERIFYPEER => false      // must additional add this 
        ));

        $response = curl_exec($curl); // Send the request, save the response
        //print_r(json_decode($response, true)); // print json decoded response
        curl_close($curl); // Close request

        $result = json_decode($response, true);
        // endforeach;

        $ratio = $result['ListIGPrice'][0]['Price'];

        return $ratio;
    }
}
