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

    // set dynamic alert
    public function setAlert($type, $msg){
        return "<div class='alert alert-{$type} alert-dismissible fade show position-absolute top-0 start-50 translate-middle-x' role='alert'>
                $msg
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
      
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