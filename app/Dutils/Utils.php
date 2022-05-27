<?php
class Utils{

    // santize email
     public function sanitize_email($email){

         if(!empty($email)){
            return filter_var($email,FILTER_SANITIZE_EMAIL);
        }

        
    }

    // verify password
     public function passwordVerify($pass, $hash){
        return password_verify($pass, $hash);
    }

   
    public function setFlash($type, $msg){
        return "<div class='alert alert-{$type}'> $msg</div>";
    }

    // generate application id
    public function setAppId($userid){
        $prefix ="AP";
        $year = date('Y');
        $num = substr(str_shuffle("01234567899876543210"),0,4);
        $generate_id =$prefix.$userid.$year.$num;
        return $generate_id;
    }
}