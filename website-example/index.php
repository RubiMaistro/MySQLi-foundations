<?php
    require_once 'connect.php';

    if(isset($_POST['submit'])){
        if(isset($_POST['first_name'], $_POST['last_name'], $_POST['profession']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])){
            $first_name = htmlentities(htmlspecialchars($db_handle->real_escape_string(trim($_POST['first_name']))));
            $last_name = htmlentities(htmlspecialchars($db_handle->real_escape_string(trim($_POST['last_name']))));
            $profession = htmlentities(htmlspecialchars($db_handle->real_escape_string(trim($_POST['profession']))));
        
            $db_handle->query("INSERT INTO peoples (id, first_name, last_name, data, connection_date)
                VALUES (null, '".$first_name."', '".$last_name."', '".$profession."', NOW())");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
        <?php
            if($result = $db_handle->query("SELECT * FROM peoples")){
                if($result->num_rows){
                    $table = $result->fetch_all(MYSQLI_NUM);
                    echo '<table border="1">';
                    echo '<tr><td>ID</td> <td>Fisrt Name</td> <td>Last Name</td> <td>Profession</td> <td>Connection</td></tr>';
                    foreach($table as $row){
                        echo '<tr>';
                        foreach($row as $record){
                            echo '<td>'. $record .'</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                }else{
                    echo '<p>Undefined</p>';
                }
                $result->free();
            }
        ?>
        <hr />
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <table>
                <tr>
                    <td>*First Name:</td>
                    <td><input type="text" name="first_name" /></td>
                </tr>
                <tr>
                    <td>*Last Name:</td>
                    <td><input type="text" name="last_name" /></td>
                </tr>
                <tr>
                    <td>Profession:</td>
                    <td><textarea name = "profession"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" values="Send" /></td>
                </tr>
            </table>
        </form>
</html>

<?php

    // Database end connection 
    $db_handle->close();

?>
