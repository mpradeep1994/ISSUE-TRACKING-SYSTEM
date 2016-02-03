<?php
include('../db.php');
$ticketid=$_REQUEST['ticketid'];
$sqlm="DELETE FROM message where ticketid='$ticketid'";
mysqli_query($connection,$sqlm);
header('Location:message.php');
?>