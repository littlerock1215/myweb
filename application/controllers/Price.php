<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

    public function test(){
        //$data['amount'] = 20;
        // $email = $this->input->post('email');
        // $currency_tobuy = $this->input->post('currency_tobuy');
        // $currency_topay = $this->input->post('currency_topay');
        // $amount = $this->input->post('amount');

        $name = $this->input->post('name');
        $mobile = $this->input->post('mobile');
        $employer = $this->input->post('employer');
        $title = $this->input->post('title');
        $net_worth = $this->input->post('net_worth');
        $liquid_net_worth = $this->input->post('liquid_net_worth');
        $source = $this->input->post('source');
        $monthly_trade = $this->input->post('monthly_trade');
        $declaration = $this->input->post('declaration');
        $date = $this->input->post('date');
        
        // $data['amount'] = $amount;
        // $data['email'] = $email;
        // $data['currency_tobuy'] = $currency_tobuy;
        // $data['currency_topay'] = $currency_topay;
        // $data['price_data'] = $this->get_price();

        $data['name'] = $name;
        $data['mobile'] = $mobile;
        $data['employer'] = $employer;
        $data['title'] = $title;
        $data['net_worth'] = $net_worth;
        $data['liquid_net_worth'] = $liquid_net_worth;
        $data['source'] = $source;
        $data['monthly_trade'] = $monthly_trade;
        $data['declaration'] = $declaration;
        $data['date'] = $date;

        //$api_data['Mode'] = 'InvestReward';
        //$data['record'] =  $this->oauth->auth_request('UiTransactionRecord','GET',$api_data);
        
        // $data['result'] = $this->db->select('id, name, symbol, quote')
        //                             ->from('news')
        //                             ->order_by('id','desc')
        //                             ->get();

        $this->load->view('mail_template/vip_mail',$data);
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

    public function vip_send()
    {   
        if (! $this->input->is_ajax_request()) {
            redirect(base_url(), 'refresh');
            exit;            
        }
            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $employer = $this->input->post('employer');
            $title = $this->input->post('title');
            $net_worth = $this->input->post('net_worth');
            $liquid_net_worth = $this->input->post('liquid_net_worth');
            $source = $this->input->post('source');
            $monthly_trade = $this->input->post('monthly_trade');
            $declaration = $this->input->post('declaration');
            $date = $this->input->post('date');

            $return['success'] = false;
            if($name='' && $mobile!='' && $employer!='' && $title!='' && $date!=''){
                
                
                $this->load->model('mail_model');
                $mail_info['subject']= '高級客戶認證資料';

                $data['subject']= '高級客戶認證資料';

                $data['name'] = $name;
                $data['mobile'] = $mobile;
                $data['employer'] = $employer;
                $data['title'] = $title;
                $data['net_worth'] = $net_worth;
                $data['liquid_net_worth'] = $liquid_net_worth;
                $data['source'] = $source;
                $data['monthly_trade'] = $monthly_trade;
                $data['declaration'] = $declaration;
                $data['date'] = $date;
                //$data['content'] = '以下是報價單及轉帳地址';
                $mail_info['body']= $this->load->view('mail_template/vip_mail',$data,true);

                
                $mail_info['to']='littlerock1215@hotmail.com';
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
    
        $row_data['name'] = $this->input->post('name');
        $row_data['mobile'] = $this->input->post('mobile');
        $row_data['employer'] = $this->input->post('employer');
        $row_data['title'] = $this->input->post('title');
        $row_data['net_worth'] = $this->input->post('net_worth');
        $row_data['liquid_net_worth'] = $this->input->post('liquid_net_worth');
        $row_data['source'] = $this->input->post('source');
        $row_data['monthly_trade'] = $this->input->post('monthly_trade');
        $row_data['declaration'] = $this->input->post('declaration');
        $row_data['date'] = $this->input->post('date');

        $data['success'] = false;

        if($row_data['name']!='' && $row_data['mobile']!=''){
            $this->db->insert('vip',$row_data);

            $data['success'] = true;
            $data['msg'] = '資料已發送!';
        }else{
            $data['success'] = false;
            $data['msg'] = '請填寫必要資訊';
        }
        
        echo json_encode($data);
    }
}