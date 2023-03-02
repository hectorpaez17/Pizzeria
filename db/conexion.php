<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "pizzeria";
$con = new mysqli($host_db,$user_db,$pass_db,$db_name);
if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}
?>