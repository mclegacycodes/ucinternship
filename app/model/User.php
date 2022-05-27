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
        if(mysqli_num_rows($stmt) > 0){
            return true;
        }else{
            return false;
        }
    }


    public function fetchApplication($user_id){
     
        
        if($this->checkApplication($user_id)){
            $stmt = $this->db->query("SELECT t1.application_id, app_status, application_date, t2.name FROM applications AS t1
            JOIN departments AS t2 ON t1.department_id = t2.id WHERE t1.user_id = 'psitc180059'");
            return $stmt;
            

        }else{
            echo "no application";
          
            
        }
    }


    // get departments
    public function getDepartment(){
        $stmt =$this->db->query("SELECT * FROM departments");
        return $stmt;
    }

    //insert application
    public function insertApplication($app_id, $user_id, $department_id){
        $this->db->query("INSERT INTO applications (user_id, department_id, application_id)
        VALUES('{$user_id}','{$department_id}','{$app_id}') ");

       
        if($this->db->affected_rows > 0){
            // $this->msg=['success','Your application has been submitted successfuly!'];
            echo "success";
            die();
        }else{
            echo "failure";
            die();
            //  $this->msg=['danger','Insertion failed! Select an Office of Internship'];
            //  print_r( $this->msg);
            //  die();
    
        }
        


    }

}