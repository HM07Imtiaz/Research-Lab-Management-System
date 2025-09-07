
<?php

$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='final_project';
$port ='3307';

$conn = new mysqli($host, $username, $password, $dbname,$port);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}
