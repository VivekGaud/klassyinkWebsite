<?php


$conn = new mysqli("localhost", "root");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE freeshop";
if ($conn->query($sql) === TRUE) {
    $db = mysqli_connect("localhost","root","","freeshop");
} else {
    $db = mysqli_connect("localhost","root","","freeshop");
}



?>