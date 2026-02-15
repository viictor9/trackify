<?php


$hostname = "localhost";
$username = "victor";
$port = 3306;
$password = "xoxo";
$database = "trackify";

$connection = mysqli_connect($hostname, $username, $password, $database);

if($connection == true){
    echo "<script>window.alert(Connection successful!);</script>";
}

else{
    
}





?>