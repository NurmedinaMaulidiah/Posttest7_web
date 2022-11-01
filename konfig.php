<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "posttest5_web";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("GAGAL TERHUBUNG".db->connect_error);
};
?>