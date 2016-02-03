<?php
session_start();
include('db.php');
include('dir.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * from $tbl_name where username='$username' and password='$password' ";
$type="SELECT type from $tbl_name where username='$username' and password='$password'";
$result=mysqli_query($connection,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$type=mysqli_fetch_array($result);
$user_type=$type['type'];
$name=$type['name'];
$_SESSION['name']=$name;
$_SESSION['user_type']=$user_type;
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
 if($user_type=='Manager')
 {
  $_SESSION['username']=$_POST['username'];
  header('Location:'.$pmanager.'/');
 }
 else if($user_type=='Customer')
 {
  $_SESSION['username']=$_POST['username'];
  header('Location:'.$pexecutive.'/');
 }
 else 
 {
  $_SESSION['username']=$_POST['username'];
  header('Location:'.$pengineer.'/');
 }
}
else {
 header('Location:'.$root.'/index.php');
}
?>