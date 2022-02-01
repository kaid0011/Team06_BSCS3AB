<?php

class dbConnectionClass extends mysqli 
{
    private $host = "localhost", $username = "root", $password = "team6", $dbname = "virtual_diary";
    public $con;

    function __construct()
    {
        $this->con=$this->connect($this->host, $this->username, $this->password, $this->dbname);
    }
}
?>