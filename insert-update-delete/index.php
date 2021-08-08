<?php
    require_once 'connect.php';

    $first_name = "Unknow";

    //Use superglobal GET to get a name
    if(isset($_GET['first_name']) && !empty($_GET['first_name'])){
        $first_name = $_GET['first_name'];
    }

    //Insert into database
    $query_insert = "INSERT INTO peoples (id, first_name, last_name, data, connection_date)
        VALUES(null, '".$first_name."', 'Black', 'Student', NOW())";
    
    if($db_handle->query($query_insert)){
        echo $db_handle->affected_rows;
    }
    

    //Update database
    $query_update = "UPDATE peoples set connection_date = NOW() WHERE id = 1";

    if($db_handle->query($query_update)){
        echo $db_handle->affected_rows;
    }

    //Delete from database
    $query_delete = "DELETE FROM peoples WHERE first_name = ''";

    if($db_handle->query($query_delete)){
        echo $db_handle->affected_rows;
    }

    // Database end connection 
    $db_handle->close();

?>
