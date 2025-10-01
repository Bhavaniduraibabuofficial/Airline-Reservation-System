<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = 'ofbsphp';
$port = '3307';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
// visit freeprojectscodes.com for more projects
