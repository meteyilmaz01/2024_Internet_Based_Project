<?php

$db_host="localhost";
$username="root";
$password="";
$database="javatpoint";

$conn=new mysqli($db_host, $username, $password);

if(!$conn)
{
    die("Database connection failed").mysqli_connect_error();
}


$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === false) {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($database);
?>



