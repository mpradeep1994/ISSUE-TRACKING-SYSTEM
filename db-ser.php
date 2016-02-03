<?php

$host="mysql.serversfree.com"; // Host name
$username="u371796750_its"; // Mysql username
$password="Monitor001"; // Mysql password
$db_name="u371796750_its"; // Database name
$tbl_name="users"; // Table name

$connection=mysqli_connect($host,$username,$password,$db_name);
if(mysqli_connect_errno($connection))
{
echo "Failed to connect database".mysqli_connect_errno();
}
?>