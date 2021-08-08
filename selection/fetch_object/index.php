<?php
    require_once 'connect.php';

    $query = "SELECT * FROM peoples";

    // Save data in an OBJECT

    if($result = $db_handle->query($query)){
        // Object
        if($result->num_rows){
            /*$row = $result->fetch_object();
            echo '<pre>';
            print_r($row);*/

            echo '<pre>';
            $table = array();
            while($row = $result->fetch_object()){
                array_push($table, $row);
                // 
                echo $row->first_name .' '. $row->last_name .'<br />';
            }

            print_r($table);
        }

        $result->free();
    }

    // Database end connection 
    $db_handle->close();

?>
