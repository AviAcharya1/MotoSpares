<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login and register";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>