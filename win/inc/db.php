<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "win";
$conn = mysqli_connect($servername, $username, $password, $db );

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}