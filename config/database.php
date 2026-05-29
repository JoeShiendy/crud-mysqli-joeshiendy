<?php
$host="localhost";
$username="root";
$password="";
$database = "db_nail_crud";

$conn = @new mysqli ($host,$username,$password,$database);
if ($conn->connect_error){
    die("koneksi ke database gagal: " . 
    $conn->connect_error);
}
?>