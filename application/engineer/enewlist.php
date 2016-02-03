<?php

require_once("../../db.php");
include('../../style.php');

?><head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>

<div class='main'>
 <div id='caption'>Issues to be Resolved</div>
 </br></br>
 <table border="1" cellspacing=0 cellpadding=5 align="center">
  <tr><th>Ticket Id</th><th>Issue Title</th><th>Client Name and Contact Details</th><th>Date and Time</th><th>Logged By</th><th>Assigned To</th><th>Priority</th>
   <th>Status</th><th>Action</th></tr>      
  <?php
   $sql="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND b.assignedto='$user' AND b.status='processing' ORDER BY a.time DESC";
   $result=mysqli_query($connection,$sql);
   $format = "Y-m-d";
   while($list=mysqli_fetch_array($result,MYSQL_ASSOC))
   {
    echo "<tr><td><a href='issue_resolution.php?ticketid=".$list['ticketid']."'>".$list['ticketid']."</a></td><td>".$list['issuetitle']."</td><td>"."&nbsp;&nbsp;".$list['email']."</td><td>";
    echo "".$list['time']."</td><td>".$list['assignedby']."</td><td>".$list['assignedto']."</td><td>".$list['priority']."</td>";

  echo "<td>".$list['status']."</td><td><a href='issue_resolution.php?ticketid=".$list['ticketid']."'><input type='button' value='Update'></a></td></tr>";
   } 

   mysqli_close($connection);                         
  ?> 
 </table>
  </br></br>
 </div>