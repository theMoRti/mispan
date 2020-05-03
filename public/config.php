<?php


$db = "localhost";
$user = "root";
$pass = "";
$server = "mispan";

function config(){
    
    $connection = mysqli_connect($db, $user, $pass, $server);
    return $connection;
}


?>