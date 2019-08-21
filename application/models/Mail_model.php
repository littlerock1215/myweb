<?php
class Mail_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function send($mail_info){
        $data['success']=false;
        if($mail_info!=''){
            require_once("phpmail/PHPMailerAutoload.php");

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->SMTPDebug = 0;

            $mail->Debugoutput = 'html';

            $mail->Host='avairobot.com';

			$mail->Port = 25;
			$mail->SMTPAuth = true; 
			//$mail->SMTPSecure = 'tls';
			$mail->SMTPAutoTLS = false; 
			$mail->CharSet="utf-8";
			$mail->Encoding="base64";

			$mail->Username="no-reply@avairobot.com";
			$mail->Password="07Uv~1kp";

			$mail->setFrom('no-reply@avairobot.com', 'AVA');


            $mail->Subject = $mail_info['subject'];
            //$mail->Body = $mail_info['body'];
            $mail->msgHTML($mail_info['body']);

            // 收件人
            $mail->AddAddress($mail_info['to'], $mail_info['to_name']);

            // 顯示訊息
            if(!$mail->Send()) {
                //$data['msg']='錯誤：系統發送失敗，請稍後再試或直接與我們聯絡';
                $data['success']=false;
                $data['error']=$mail->ErrorInfo;
                log_message('error',$mail->ErrorInfo);
            }else {
                //$data['msg']='已送出成功，我們將會儘速回覆您，謝謝';
                $data['success']=true;
            }
        }else{
            //$data['msg']='錯誤：系統發送失敗，請稍後再試或直接與我們聯絡';
            $data['success']=false;

        }
        return $data;
    }
}
?>