<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "cricket_board";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed");
}

?>