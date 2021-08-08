<?php
    //error_reporting(0);

    /** 
     * Connect ot database
     * Parameters: ip-addres, username, password, website-name
     */
    $db_server_name = '127.0.0.1';
    $db_user_name = 'root';
    $db_password = '';

    $db_handle = new mysqli('localhost', 'root', '', 'website');
    //$db_handle = mysqli_connect($db_server_name, $db_user_name, $db_password);

    if($db_handle->connect_errno){
        echo $db_handle->connect_error;
        die();
    }
?>