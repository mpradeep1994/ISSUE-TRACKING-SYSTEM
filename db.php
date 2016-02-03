<?php

$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="users"; // Table name

$connection=mysqli_connect("localhost","root","","its");
if(mysqli_connect_errno($connection))
{
echo "Failed to connect database".mysqli_connect_errno();
}
?>