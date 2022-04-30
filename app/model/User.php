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
                    $_SESSION['userid']=$result['index_num'];
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

}