<?php
    require_once 'connect.php';

    //PROBLEM IN CODE!!!

    if(isset($_GET['firs_name']) && !empty($_GET['first_name'])){
        $name = trim($_GET['first_name']);

        $query = "SELECT first_name, last_name FROM peoples WHERE first_name = ?";
        $lht = $db_handle->prepare($query);
        $lht->bind_param('s', $name);
        $lht->execute();
        $lht->bind_result($first, $last);

        while($lht->fetch()){
            echo $first .' '. $last .'<br />';
        }
    }

    // Database end connection 
    $db_handle->close();

?>
