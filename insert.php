<?php
include('db.php');
session_start();
$name=$_POST['name'];
$type=$_POST['type'];
$connection=mysqli_connect("localhost","root","","its");
$insert="INSERT INTO users VALUES('$_POST[username]','$_POST[password]','$name','$type')";
mysqli_query($connection,$insert);
header('Location:'.$root.'/index.php');
echo 'successfully registered';

mysqli_close($connection);
?>