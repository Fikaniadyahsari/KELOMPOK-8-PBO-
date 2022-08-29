<?php

class database {
    
    private $host ='localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'db_datapegawai';

    protected $conn;


    function __construct(){

        if(!isset($this->conn)){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        }

        if(!$this->conn){
            echo 'KONEKSI TIDAK BERHASIL';
        } else {
            echo '';
        }
    }

}

$data = new database();

?>