<?php 
include('../../db.php');
include('../../dir.php');

$ticketid=$_POST['ticketid'];
$desclose=$_POST['desclose'];
$option=$_REQUEST['cr'];
$c="close";
$r="reassign";
$cstatus='CLOSED (cannot be resolved)';
$sstatus='New';
$time=date('Y-m-d');
$s="0";
$cquery="UPDATE issuedetails SET status='$cstatus' where ticketid='$ticketid'";
$crquery="INSERT INTO issue_resolve values('$ticketid','$desclose','$time')";
$squery="UPDATE issuedetails SET status='$sstatus' where ticketid='$ticketid'";
$delete="DELETE FROM issue_resolve WHERE ticket_id='$ticketid'";
$mes="UPDATE message SET status='$s' where ticketid='$ticketid'";
if($option==$c)
{ 
mysqli_query($connection,$cquery);
mysqli_query($connection,$crquery);
mysqli_query($connection,$mes);
header('Location:'.$pmanager.'/issuelist.php');
}
else
{
mysqli_query($connection,$squery);
mysqli_query($connection,$delete);
header('Location:'.$pmanager.'/index.php');
}
?>

