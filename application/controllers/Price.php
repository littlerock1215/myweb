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
        $currency_tobuy = $this->input->post('currency_tobuy');
        $currency_topay = $this->input->post('currency_topay');
        $amount = $this->input->post('amount');
        
        $data['amount'] = $amount;
        $data['currency_tobuy'] = $currency_tobuy;
        $data['currency_topay'] = $currency_topay;
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

                $data['amount'] = $amount;
                $data['currency_tobuy'] = $currency_tobuy;
                $data['currency_topay'] = $currency_topay;
                $data['content'] = '以下是報價單及轉帳地址';
                $mail_info['body']= $this->load->view('mail_template/price_mail',$data,true);

                
                $mail_info['to']=$email;
                $mail_info['to_name']='';
                $send_status=$this->mail_model->send($mail_info);


                $return['msg'] = '報價資料已發送!';
                $return['success'] = true;
            }else{
                $return['msg'] = '請填寫必要資訊';
            }

            echo json_encode($return);
        // }else{
        //     redirect(base_url(),'refresh');
        // }
    }
}