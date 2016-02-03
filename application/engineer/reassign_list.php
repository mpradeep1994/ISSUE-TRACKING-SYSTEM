<?php
session_start();
include('../../db.php');
$user=$_SESSION['username'];
$type=$_SESSION['user_type'];
$reassignedto=$_POST['ruser'];
$ticketid=$_REQUEST['id'];
$time=time();
echo $reassignedto;
$query="UPDATE issuedetails SET assignedto='$reassignedto',assignedby='$user',time='$time' where ticketid='$ticketid'";
mysqli_query($connection,$query);
if($type=='Engineer')
{
header('Location:engissuelist.php');
}
else
{
header('Location:reassignlist.php');
}


?>