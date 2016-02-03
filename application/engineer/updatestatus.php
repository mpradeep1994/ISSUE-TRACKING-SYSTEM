<?php
include('../../db.php');
include('../../dir.php');
$ticketid=$_REQUEST['ticketid'];
$user=$_SESSION['username'];
$resolution=$_POST['issue_resolve'];
$rstatus='Resolved';
$time=date("Y-m-d");
$s="1";
$query="UPDATE issuedetails SET status='$rstatus' where ticketid='$ticketid'";
$rquery="INSERT INTO issue_resolve values('$ticketid','$resolution','$time')";
// message update 
$mess="Your issue has been resolved successfully.</br>The details are as follows.</br></br><div style=\"color:#993366\">Ticket ID : ".$ticketid."</br><br />Resolved  By : ".$user."<br/>Issue Description: ".$resolution."</br></div>";
$sqlm="UPDATE message SET status='$s',message='$mess' where ticketid='$ticketid' ";

mysqli_query($connection,$sqlm);
mysqli_query($connection,$query);
mysqli_query($connection,$rquery);
header('Location:'.$pengineer.'/message.php');
?>