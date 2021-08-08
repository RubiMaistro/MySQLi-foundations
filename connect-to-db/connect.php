<?php
    //error_reporting(0);
    
    /** 
     * Connect ot database
     * Parameters: ip-addres, username, password, website-name
     */
    $data_base = new mysqli('127.0.0.1', 'root', '', 'website');
    if($data_base->connect_errno){
        echo $data_base->connect_error;
    }
?>