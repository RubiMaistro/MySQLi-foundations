<?php
    require_once 'connect.php';

    $query = "SELECT 'peoples'.'first_name', 'peoples'.'last_name', 'country'.'nev' AS country FROM peoples LEFT JOIN country ON 'peoples'.'country' = 'country'.'id'";
    if($result = $db_handle->query($query)){
        if($result->num_rows){
            while($row = $result->fetch_object()){
                echo $row->first_name .' '. $row->last_name .' '. $row->country .'<br />';
            }
        }else{
            echo '<p>Not found.</p>';
        }

        $result->free();
    }

    // Database end connection 
    $db_handle->close();

?>
