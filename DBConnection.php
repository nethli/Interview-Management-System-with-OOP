<?php

class DBConnection{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'interviewMgt';

    function __construct( $hostname, $username, $password,$database){
        $this-> hostname = $hostname;
        $this-> username = $username;
        $this-> password = $password;
        $this-> database = $database;
    }

    public function open(){
        $con = new mysqli($this-> hostname,$this-> username, $this-> password,$this-> database);
        
        if($con){
            echo 'Hi';
        }
        else{
            die(mysqli_error($con));
        }
           
        }
    }
?>