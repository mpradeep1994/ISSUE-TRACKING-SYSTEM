3<?php
session_start();
include('../../db.php');

$name=$_POST['clientname'];
$email=$_POST['clientemail'];
$mobile=$_POST['clientmobile'];
$address=$_POST['clientaddr'];
$title=$_POST['issuetitle'];
$desc=$_POST['issuedesc'];
$priority=$_POST['ipriority'];
$tassignedto="will be assigned by manager";
$status="New";
$time=date('Y-m-d');
$assignedby=$_SESSION['username'];


$cinsert="INSERT into issueclient(name,email,mobile,address,time) values('$name','$email','$mobile','$address','$time')";
mysqli_query($connection,$cinsert);
$itquery="Select * from issueclient where time='$time'";
$itresult=mysqli_query($connection,$itquery);
$iticket=mysqli_fetch_array($itresult);

//insert into messages.. :)
$ticket=$iticket['ticketid'];
$message="A new issue has been recorded and the job is assigned to you.</br>The details are as follows.</br></br><div style=\"color:#993366\">Ticket ID : ".$ticket."</br>Assigned By : ".$assignedby."<br/>Priority : ".$priority."</br></div>";
$mstatus="New";
$iinsert="INSERT into issuedetails(ticketid,issuetitle,issuedesc,priority,assignedto,assignedby,status,time) values('$ticket','$title','$desc','$priority','$tassignedto','$assignedby','$status','$time  ')";
$minsert="INSERT INTO message values('','$ticket','$assignedto','$assignedby','$message','$time','$status')";
mysqli_query($connection,$minsert);
mysqli_query($connection,$iinsert);
header("Location:newlist.php");
?>
	