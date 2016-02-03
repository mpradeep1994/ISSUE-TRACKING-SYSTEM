1<?php
include('../db.php');
$ticketid=$_REQUEST['ticketid'];
$itquery="Select * from message where ticketid='$ticketid'";
$itresult=mysqli_query($connection,$itquery);
$iticket=mysqli_fetch_array($itresult);
$message="Your issue has been resolved successfully.</br>The details are as follows.</br></br><div style=\"color:#993366\">Ticket ID : ".$ticket."</br><br />Resolved  By : ".$itickect['username']."<br/>Priority : ".$priority."</br></div>";
$sqlm="UPDATE message SET status='1',message='$message'  where ticketid='$ticketid' ";

mysqli_query($connection,$sqlm);


header('Location:enewlist.php');
?>