<?php
require_once("../../db.php");
include('../../style.php');
$id=$_REQUEST['ticketid'];
$format = "Y-m-d";
$query="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND a.ticketid=".$id;
$result=mysqli_query($connection,$query);
?>

<div class='main'>
 <div id='caption'>Issue Resolution</div>
 </br>
<?php
echo "<table border='1' cellspacing='0' cellpadding='5' width=50% align='center'>";
while($list=mysqli_fetch_array($result))
{
echo "<tr><td>Ticket No</td><td>".$list['ticketid']."</td></tr>";
echo "<tr><td>Issue Title</td><td>".$list['issuetitle']."</td></tr>";
echo "<tr><td>Client Name</td><td>".$list['name']."</td></tr>";
echo "<tr><td>Client Email</td><td>".$list['email']."</td></tr>";
echo "<tr><td>Client Mobile</td><td>".$list['mobile']."</td></tr>";
echo "<tr><td>lient Address</td><td>".$list['address']."</td></tr>";
echo "<tr><td>Date and Time</td><td>".$list['time']."</td></tr>";
echo "<tr><td>Logged By</td><td>".$list['assignedby']."</td></tr>";
echo "<tr><td>Assigned To</td><td>".$list['assignedto']."</td></tr>";
echo "<tr><td>Priority</td><td>".$list['priority']."</td></tr>";
echo "<tr><td>Time Elapsed</td><td>".$list['time']."</td></tr>";
echo "<tr><td>Issues Description</td><td>".$list['issuedesc']."</td></tr>";
echo "<tr><td>Status</td><td>".$list['status']."</td></tr>";
echo "<tr><td>Issue Resolution</td><td><form action='updatestatus.php?ticketid=".$list['ticketid']."' method='POST'><textarea name='issue_resolve'></textarea></br></br>
<input type='submit' value='RESOLVE ISSUE' ></form></td></tr>";
echo "<tr><td>If not possible </td><td ><a href='reassign.php?ticketid=".$list['ticketid']."&&user=".$list['assignedto']."'><input type='button' value='Assign to Another Employee'></a></td></tr></table>";

}

//2nd page of issue resolve..:P
?>
</br></br>
</div>
