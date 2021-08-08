<?php
    require_once 'connect.php';

    $query = "SELECT * FROM peoples";

    // Save data in an ARRAY

    if($result = $db_handle->query($query)){
        // Lines
        if($result->num_rows){
            // fetch_array() default parameter: MYSQLI_BOTH
            // $row = $result->fetch_array();
            echo '<pre>';
            while($row = $result->fetch_assoc()){
                print_r($row);
                //echo $row['first_name'] ,' ', $row['last_name'] ,'<br />';
            }
            
            /*
            foreach($row as $key=>$record){
                echo '<b>'. $key .'</b> = '. $record .'<br />';
            }*/
            //$row = $result->fetch_assoc();
            //echo $row['last_name'];
        }


        $result->free();
    }

    // Database end connection 
    $db_handle->close();

?>
