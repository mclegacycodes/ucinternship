<?php 
class Database{
    public $db;

    public function __construct(
        $dbhost='localhost',
        $dbpass='',
        $dbuser='root',
        $dbname='ucinternship'

    ){
        $this->db= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
        if($this->db->connect_errno){
            echo "failed to connect to the db" . $this->db->connect_error;
            exit;
        }
    }
}