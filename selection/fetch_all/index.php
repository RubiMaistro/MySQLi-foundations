<?php
    require_once 'connect.php';

    $query = "SELECT * FROM peoples";

    // Save data in a TABLE

    /**
     * fetch_all(<parameters>):
     * MYSQLI_NUM, 
     * MYSQLI_ASSOC, 
     * MYSQLI_BOTH (NUM and ASSOC, this is not recomended)
     */

    if($result = $db_handle->query($query)){
        // Use MYSQLI_NUM
        $table_num = $result->fetch_all(MYSQLI_NUM);
        
        echo '<pre>';
        print_r($table_num);
        
        // Print with foreach
        /*
        foreach($table as $row){
            foreach($row as $record){
                echo $record.'*';
            }
            echo '<br />';
        }*/

        // Use numbers in array
        echo $table_num[0][1];

        // Delete value of variable
        $result->free();
    }

    if($result = $db_handle->query($query)){
        // Use MYSQLI_ASSOC
        $table_assoc = $result->fetch_all(MYSQLI_ASSOC);

        echo '<pre>';
        print_r($table_assoc);

        // Use table col names
        echo $table_assoc[1]['first_name'];

        // Delete value of variable
        $result->free();
    }

    // Database end connection 
    $db_handle->close();

    /*
    echo '<pre>';
    print_r($result);
    */
?>
