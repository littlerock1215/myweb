<?php
  class User_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function user_varify($account,$password){
      if(!empty($account) && !empty($password)) 
      {
        $user_table='system_user';

        $this->load->database();
        
        $query_str='select * from '.$user_table." where account=".$this->db->escape($account)." limit 1";   
        $query_result = $this->db->query($query_str);
        if($row=$query_result->row_array())
        {
          $this->load->library('encrypt');
          $user_password=$this->encrypt->decode($row['password']);  //decode user password in database

          if($user_password===$password)
          {
            $return_value['account']=$row['account'];
            $return_value['permission']=$row['permission'];            
            $return_value['role_type']=$row['role_type'];
            $return_value['user_id']=$row['id'];
            $return_value['user_name']=$row['name'];
            
            if($row['status']=='a'){
              $return_value['login_status']='closed';
            }else{
              $return_value['login_status']='success';
            }
            return $return_value;  
          }
          else
          {
            $return_value['permission']=NULL;
            $return_value['login_status']='fail';
            return $return_value; 
          }
        }
        else
        {
          $return_value['permission']=NULL;
          $return_value['login_status']='fail';
          return $return_value; 
        }               
      }else{
        $return_value['permission']=NULL;
        $return_value['login_status']='fail';
        return $return_value;
      }  
    }    
  }
?>