<?php
session_start();
include('../../db.php');
$user=$_SESSION['username'];
$type=$_SESSION['user_type'];
$emp=$_POST['emp'];
$ticketid=$_REQUEST['id'];
$time=date('Y-m-d');
$nstatus="processing";
$sqlm="UPDATE message SET username='$emp',status='0' where ticketid='$ticketid'";

$query="UPDATE issuedetails SET assignedto='$emp',status='$nstatus' where ticketid='$ticketid'";
mysqli_query($connection,$query);
mysqli_query($connection,$sqlm);
if($type=='Manager')
{

header('Location:index.php');
}
else
{
header('Location:index.php');
}


?>