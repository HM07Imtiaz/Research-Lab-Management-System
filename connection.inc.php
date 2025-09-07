
<?php
session_start();


$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "final_project";
$port = 3307; 

$con = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>