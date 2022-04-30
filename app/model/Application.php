<?php
require_once 'app/config/Database.php';

class Application extends Database{
    public $result=[];
    public function validApplication($user_id){
          $stmt = $this->db->query("SELECT * FROM applications WHERE user_id ='{$user_id}'");
        if(mysqli_num_rows($stmt)>0){
            return true;
        }else{
            return false;
        }
    }


    public function fetchApplication($user_id){
        if($this->fetchApplication($user_id)){
            $stmt = $this->db->query("SELECT * FROM applications WHERE user_id ='{$user_id}'");
            $this->result = mysqli_fetch_assoc($stmt);
            print_r($this->result);
            

        }else{
            echo "no application";
            exit;
        }
    }
}