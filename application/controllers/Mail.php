<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {
    private $remote_key = 'VEIjy#sdFc&U21y';
    public function index()
    {
       $data = $this->load_default();

        if(in_array('normal',$data['permission']))
        {
            $data['data_list'] = $this->get_list();
            $data['page_focus']='account';
            // $this->load->view('header',$data);
            $this->load->view('mail/send_mail',$data);
            // $this->load->view('footer',$data);
        }else{
            redirect(base_url(),'refresh');
        }
    }
    public function send()
    {
        $data = $this->load_default();
        if (! $this->input->is_ajax_request()) {
            redirect(base_url(), 'refresh');
            exit;            
        }
        if(in_array('normal',$data['permission']))
        {
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $content = $this->input->post('content');

            $return['success'] = false;
            if($email!='' && $subject!='' && $content!=''){
                //$mails = array();
                // 包成陣列
                if(strstr($email,',')){
                    $mails = explode(',',$email);
                }else{
                    $mails = array($email);
                    // 如果找不到逗號，則直接把值塞入陣列
                }
                
                $this->load->model('mail_model');
                $mail_info['subject']= $subject;
                // $mail_info['subject']陣列可以直接宣告

                $data['subject'] = $subject;
                $data['content'] = nl2br($content);
                $mail_info['body']= $this->load->view('mail_template/custom_mail',$data,true);

                foreach($mails as $row){
                    if($row!=''){
                        $mail_info['to']=$row;
                        $mail_info['to_name']='';
                        $send_status=$this->mail_model->send($mail_info);
                    }
                }

                $type = $this->input->post('type');
                
                $api_data['DateTime'] = date('Y/m/d H:i:s');
                $api_data['Content'] = $content;
                $api_data['Subject'] = $subject;
                $api_data['Type'] = $type;
                $api_result = $this->oauth->auth_request('InsertAnnouncement','POST',$api_data);


                $return['msg'] = '信件已發送!。'.$api_result['Message'];
                $return['success'] = true;
            }else{
                $return['msg'] = '請填寫必要資訊';
            }

            echo json_encode($return);
        }else{
            redirect(base_url(),'refresh');
        }
    }
    public function remote_send()
    {
        $key = $this->input->post('key');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $content = $this->input->post('content');

        if($key == $this->remote_key){
            if($email!='' && $subject!='' && $content!=''){
                //$mails = array();
                // 包成陣列
                if(strstr($email,',')){
                    $mails = explode(',',$email);
                }else{
                    $mails = array($email);
                    // 如果找不到逗號，則直接把值塞入陣列
                }
                
                $this->load->model('mail_model');
                $mail_info['subject']= $subject;
                // $mail_info['subject']陣列可以直接宣告

                $data['subject'] = $subject;
                $data['content'] = nl2br($content);
                $mail_info['body']= $this->load->view('mail_template/custom_mail',$data,true);

                foreach($mails as $row){
                    if($row!=''){
                        $mail_info['to']=$row;
                        $mail_info['to_name']='';
                        $send_status=$this->mail_model->send($mail_info);
                    }
                }

                $return['Message'] = '信件已發送!';
                $return['Result'] = 0;
            }else{
                $return['Result'] = 1;
                $return['Message'] = '請填寫必要資訊';
            }
        }else{
            $return['Result'] = 1;
            $return['Message'] = 'Auth Failed.';
        }

        echo json_encode($return);
    }
    public function test(){
        $data['subject'] = 'wgawrharhaerhqerh';
        $data['content'] = 'qgqwrgqwrgqrgqegrqer<br />braberbqerbeqrb<br />';
        $this->load->view('mail_template/custom_mail',$data);
        // $url = "https://manage.avairobot.com/mail/remote_send";
        // $infos = array(
        //     'email'=>'a12462@gmail.com',
        //     'subject'=>'測試',
        //     'content'=>'test123',
        //     'key'=>'VEIjy#sdFc&U21y'
        // );
 
        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($infos));
        // $output = curl_exec($ch);
        
        // curl_close($ch);
        
        // echo $output;
    }

    public function get_list(){
        $api_data = '';
        $result =  $this->oauth->auth_request('GetAllAccountID','GET',$api_data);

        return $result['ListAccountID'];
    }
}
