<?php

require_once("../../db.php");
include('../../style.php');
$id=$_REQUEST['ticketid'];

?>
<div class='main'>
 <div id='caption'>Resolved Issues</div>
 </br></br>

 <?php
   $sql="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where   a.ticketid=b.ticketid AND a.ticketid=$id AND b.status='Resolved' ORDER BY a.time DESC";
   $lsql="SELECT  issue_resolve_details,resolved_time from issue_resolve where ticket_id=$id";
   $result=mysqli_query($connection,$sql);
   $lresult=mysqli_query($connection,$lsql);
   $format = "M d, Y h:i a";
  
echo "<table border='1' cellspacing='0' cellpadding='5' align='center'>";
while($list=mysqli_fetch_array($result))
{
echo "<tr><td>Ticket No</td><td>".$list['ticketid']."</td></tr>";
echo "<tr><td>Issue Title</td><td>".$list['issuetitle']."</td></tr>";
echo "<tr><td>Client Name</td><td>".$list['name']."</td></tr>";
echo "<tr><td>Client Email</td><td>".$list['email']."</td></tr>";
echo "<tr><td>Client Mobile</td><td>".$list['mobile']."</td></tr>";
echo "<tr><td>Client Address</td><td>".$list['address']."</td></tr>";
echo "<tr><td>Date and Time</td><td>";date_default_timezone_set("Asia/Calcutta");
echo date($format,$list['time'])."</td></tr>";
echo "<tr><td>Logged By</td><td>".$list['assignedby']."</td></tr>";
echo "<tr><td>Assigned To</td><td>".$list['assignedto']."</td></tr>";
echo "<tr><td>Priority</td><td>".$list['priority']."</td></tr>";
echo "<tr><td>Issues Description</td><td>".$list['issuedesc']."</td></tr>";
echo "<tr><td>Status</td><td>".$list['status']."</td></tr>";
while($llist=mysqli_fetch_array($lresult))
{
echo "<tr><td>Resolved Time</td><td>".$llist['resolved_time']."</td></tr>";
echo "<tr><td>Issue Resolution</td><td>".$llist['issue_resolve_details']."</td></tr></table>";
}


}
	

mysqli_close($connection);                         
?> 
 </table>
  </br></br>
 </div>