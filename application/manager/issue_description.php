<?php
require_once('../../db.php');

$id=$_REQUEST['ticketid'];
include('../../style.php');
include('../../dir.php');
?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">

</head>
<?php
$format = "Y-m-d";
$query="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND a.ticketid=".$id;
$result=mysqli_query($connection,$query);
echo "<div class='main'><div id='caption'>Issue Details</div></br><div id=\"tab\"><table border='1' cellspacing=0 cellpadding=8 align='center'>";
while($list=mysqli_fetch_array($result))
{
echo "<caption>Issue Description</caption><tr><td>Ticket No</td><td>".$list['ticketid']."</td</tr>";
echo "<tr><td>Issue Title</td><td>".$list['issuetitle']."</td></tr>";
echo "<tr><td>Client Name</td><td>".$list['name']."</td></tr>";
echo "<tr><td>Client Email</td><td>".$list['email']."</td></tr>";
echo "<tr><td>Client Mobile</td><td>".$list['mobile']."</td></tr>";
echo "<tr><td>Client Address</td><td>".$list['address']."</td></tr>";
echo "<tr><td>Date and Time</td><td>";

echo "".$list['time']."</td></tr>";

echo "<tr><td>Assigned To</td><td>".$list['assignedto']."</td></tr>";
echo "<tr><td>Priority</td><td>".$list['priority']."</td></tr>";

echo "<tr><td>Status</td><td>".$list['status']."</td></tr>";
echo "<tr><td>Issue Description</td><td>".$list['issuedesc']."</td></tr>";
if($list['status']=='Resolved'||'Closed')
 {
  $rquery="SELECT * from issue_resolve where ticket_id=".$list['ticketid'];
  $rresult=mysqli_query($connection,$rquery);
	  while($rlist=mysqli_fetch_array($rresult))
	  {
       echo "<tr><td>Issue Resolution</td><td>".$rlist['issue_resolve_details']."</td></tr>";
       echo "<tr><td>Issue Resolved Time</td><td>";
       date_default_timezone_set("Asia/Calcutta");
       echo date($format,$rlist['resolved_time'])."</td></tr>";
      }
 }
 
 }

?>

</table>
</div></br></br></br>
</div>
</body>
</html>