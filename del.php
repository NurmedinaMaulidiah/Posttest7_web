<?php
require 'konfig.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM review WHERE id = '$id'");
    if($result){
        header("Location : show.php");
    }
}
?>