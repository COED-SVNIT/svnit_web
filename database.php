<?php
$servername = 'localhost';
$name = 'root';
$pwd = '';
$db = 'svnit';

$conn = mysqli_connect($servername , $name , $pwd , $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>