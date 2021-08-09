<?php
    require_once 'connect.php';

    class People{
        public $id, $first_name, $last_name, $data, $connection_date, $country,
            $str;
        function __construct(){
            $this->str = $this->first_name ." ". $this->last_name ."'s is a(n) ". $this->data .".";
        }
    };

    $query = "SELECT * FROM peoples";
    if($result = $db_handle->query($query)){
        if($result->num_rows){
            while($row = $result->fetch_object('People')){
                echo $row->str .'<br />';
            }
        }else{
            echo '<p>Not found.</p>';
        }

        $result->free();
    }

    // Database end connection 
    $db_handle->close();

?>
