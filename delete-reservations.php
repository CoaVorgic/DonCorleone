<?php
//delete.php
include 'db_config.php';

if(isset($_POST["id"])) {
    foreach($_POST["id"] as $id) {
        $query = "DELETE FROM reservation WHERE firstname = '".$id."'";
        $res = mysqli_query($connection, $query);
    }  
}
?>