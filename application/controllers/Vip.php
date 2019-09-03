<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vip extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('vip');
	}

	public function vip_send()
    {
        
        // if (! $this->input->is_ajax_request()) {
        //     redirect(base_url(), 'refresh');
        //     exit;            
		// }
		
        //     $email = $this->input->post('email');
        //     $phone = $this->input->post('phone');
        //     $currency_tobuy = $this->input->post('currency_tobuy');
        //     $currency_topay = $this->input->post('currency_topay');
        //     $amount = $this->input->post('amount');
        //     $note = $this->input->post('note');

		// 	$return['success'] = false;
			
        //     if($email!='' && $phone!='' && $amount!='' && $currency_tobuy!='' && $currency_topay!=''){
                
                
        //         $this->load->model('mail_model');
        //         $mail_info['subject']= '報價單';

        //         $data['subject']= '報價單';

        //         $data['price_data'] = $this->get_price();
        //         $data['email'] = $email;
        //         $data['phone'] = $phone;
        //         $data['amount'] = $amount;
        //         $data['currency_tobuy'] = $currency_tobuy;
        //         $data['currency_topay'] = $currency_topay;
        //         $data['note'] = $note;
        //         $data['content'] = '以下是報價單及轉帳地址';
        //         $mail_info['body']= $this->load->view('mail_template/price_mail',$data,true);

                
        //         $mail_info['to']='quote@tradecoin4u.com';
        //         $mail_info['to_name']='';
        //         $send_status=$this->mail_model->send($mail_info);


        //         $return['msg'] = '報價資料已發送!';
        //         $return['success'] = true;
        //     }else{
        //         $return['msg'] = '請填寫必要資訊';
        //     }

        //     echo json_encode($return);





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
}