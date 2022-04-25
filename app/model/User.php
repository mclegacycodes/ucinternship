<?php
require_once 'app/config/Database.php';

class User extends Database{

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
             $stmt = $this->db->query("SELECT * FROM stud_db WHERE email = '{$email}'");
             if(mysqli_num_rows($stmt)){
                 $result = mysqli_fetch_assoc($stmt);

                 Utils::passwordVerify($pass,$result['pass']) ? header('Location: view/layouts/dashboard.php') : $this->msg=['danger','Invalid username or password'];
                 print_r($result);

             }else{
                 $this->msg=['danger','Invalid username or password'];
                 exit;
             }

        }
    }

}