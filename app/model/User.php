<?php
require_once 'app/config/Database.php';

class User extends Database{
    public $msg = [];

    //check if user exists
    public function userExists($email){
        $stmt = $this->db->query("SELECT * FROM users WHERE email ='{$email}'");
        if(mysqli_num_rows($stmt)>0){
            return true;
        }else{
            return false;
        }
    }


    //user login
    public function login($email,$pass){
        if($this->userExists($email)){
             $stmt = $this->db->query("SELECT * FROM users WHERE email = '{$email}'");
             if(mysqli_num_rows($stmt) > 0){
                $result = mysqli_fetch_assoc($stmt);
                if(Utils::passwordVerify($pass,$result['pass'])){ 
                    $_SESSION['userid']=$result;
                   return true;
                }else{
                    $this->msg=['danger','Invalid username or password'];
                 
                }
             }else{
                $this->msg=['danger','Invalid username or password'];
             
             }

        }else{
            $this->msg=['danger','Invalid username or password'];
        }
    }



    // user application
    public function checkApplication($user_id){
          $stmt = $this->db->query("SELECT * FROM applications WHERE user_id ='{$user_id}'");
        if(mysqli_num_rows($stmt)>0){
            return true;
        }else{
            return false;
        }
    }


    public function fetchApplication($user_id){
        if($this->checkApplication($user_id)){
            $stmt = $this->db->query("SELECT * FROM applications WHERE user_id ='{$user_id}'");
            //  $result = mysqli_fetch_assoc($stmt);
            return $stmt;
            

        }else{
            echo "no application";
            
        }
    }

}