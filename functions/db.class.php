<?php

class DB{
    protected $db_name = 'employee';
    protected $host = 'localhost';
    protected $db_pass = '';
    protected $db_user = 'root';
    
    
    public function connect(){
        $connect_db = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
        
        if(mysqli_connect_errno()){
            printf("Connection failed: %s", mysqli_connect_error());
            exit();
        }
        return true;
    }
}


?>