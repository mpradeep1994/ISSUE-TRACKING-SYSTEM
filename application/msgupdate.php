<?php
include('../db.php');
$ticketid=$_REQUEST['ticketid'];
$sqlm="UPDATE message SET status='1' where ticketid='$ticketid'";
$sqlr="UPDATE issuedetails SET status='processing your issue' where ticketid='$ticketid'";
mysqli_query($connection,$sqlm);
mysqli_query($connection,$sqlr); 

header('Location:message.php');
?>