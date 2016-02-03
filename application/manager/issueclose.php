<?php

require_once('../../db.php');
include('../../style.php');

?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class='main'>
 <div id='caption'>Resolved Issues</div></br>
<table border="1" cellspacing=0 cellpadding=5 align="center" >
<tr><th>Ticket Id</th><th>Issue Title</th><th>Client Name and Contact Details</th> <th>Assigned Time</th><th>Logged By</th><th>Assigned To</th><th>Priority</th>
<th>Status</th><th>Action</th></tr>      
   <?php
   $format = "Y-m-d";
   $sql="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND b.status='Resolved' ";
 $result=mysqli_query($connection,$sql);
 while($list=mysqli_fetch_array($result))
{
echo "<tr><td><a href=\"issue_close.php?ticketid=".$list['ticketid']."\">".$list['ticketid']."</a></td><td>".$list['issuetitle']."</td><td>".$list['name']."&nbsp;&nbsp;".$list['email']."</td><td>";
date_default_timezone_set("Asia/Calcutta");
echo "".$list['time']."</td><td>".$list['assignedby']."</td><td>".$list['assignedto']."</td><td>".$list['priority']."</td><td>".$list['status']."</td><td><a href=\"issue_close.php?ticketid=".$list['ticketid']."\"><input type='button' value='Update'></a></tr>";
} 

mysqli_close($connection);
    ?> 
	</table></br></br>
	</div>
	</body>