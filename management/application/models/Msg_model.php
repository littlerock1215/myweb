<?php
  class Msg_model extends CI_Model {
    private $msg_account='78957438';
    private $msg_password='wude0315';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    public function getService($id)
    {
      //find the product
      $this->load->database();
      $service = $this->db->select('*')->where('id', $id)->where('status >=', 'b')->get('service')->row_array();
      return $service;
    }
    public function msg_ServerGet($parameters , $msg_type) {
      if($msg_type==1){
        $ServiceURL = 'http://smexpress.mitake.com.tw/SmSendGet.asp';
      }
      
      $parameters = array_merge($parameters,
                                array('username'=>$this->msg_account,
                                      'password'=>$this->msg_password,
                                      'encoding'=>'UTF8')
                                );
      $fields = http_build_query($parameters);
      $url = $ServiceURL.'?'.$fields;
      
      $ch = curl_init();   
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      
      $st = curl_exec($ch);
      
      $st = explode('<br />',nl2br($st));
      $msgid='';
      foreach($st as $item){
        if(strstr($item,'msgid=')){
          $msgid = str_replace('msgid=','',$item);    
        }
      }
      /*
      if( === false)
      {
           log_message('error','Curl error: ' . curl_error($ch));
      }
      */
      
      curl_close($ch);

      return $msgid;
  }
  }
?>