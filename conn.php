<?php
$host = "localhost";
$dbuser = "mess";
$dbpass = "mess";
$dbname = "mess_demo";

$conn =mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>