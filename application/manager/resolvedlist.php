<?php

require_once("../../db.php");
include('../../style.php');

?><head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>

<div class='main'>
 <div id='caption'>Resolved Issues</div>
 </br></br>
 <table border="1" cellspacing=0 cellpadding=5 align="center">
  <tr><th>Ticket Id</th><th>Issue Title</th><th>Logged By</th><th>Assigned To</th><th>Status</th><th>Assigned Date</th><th>Resolved Date</th></th>
  <?php
   $sql="SELECT a.ticketid,b.issuetitle,b.assignedto,b.assignedby,b.status,b.time FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND b.status='Resolved' ORDER BY a.time DESC";

   $result=mysqli_query($connection,$sql);
   $format = "Y-m-d";
   while($list=mysqli_fetch_array($result,MYSQL_ASSOC))
   {
    echo "<tr><td><a href=\"issue_resolution_desc.php?ticketid=".$list['ticketid']."\">".$list['ticketid']."</a></td><td>".$list['issuetitle']."</td>";
    echo "<td>".$list['assignedby']."</td><td>".$list['assignedto']."</td><td>".$list['status']."</td><td>";
	date_default_timezone_set("Asia/Calcutta");
echo "".$list['time']."</td><td>";
	   $rsql="Select * from issue_resolve where ticket_id=".$list['ticketid'];
	   $rresult=mysqli_query($connection,$rsql);
	   $rlist=mysqli_fetch_array($rresult);
	date_default_timezone_set("Asia/Calcutta");
echo "".$rlist['resolved_time']."</td></tr>";   
	   
} 

   mysqli_close($connection);                         
  ?> 
 </table>
  </br></br>
 </div>