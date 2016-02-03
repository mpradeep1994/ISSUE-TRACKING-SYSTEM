<?php

require_once('../../db.php');
include('../../style.php');
require('../pagination.php');
?>

<?php 
$page=0;//Default page
$limit=1;//Records per page
$start=1;//starts displaying records from 0
if(isset($_GET['page']) && $_GET['page']!=''){
$page=$_GET['page'];
}
$start=($page-1)*$limit;
?>


<div class="main">
 <div id="caption">Your Recent Issues </div>
 </br>
<table border="1" cellspacing=0 cellpadding=5 id="table" align="center">

<tr><th>Ticket Id</th><th>Issue Title</th><th>Client Name and Contact Details</th> <th>Date and Time</th><th>Assigned To</th><th>Priority</th>
<th>Status</th></tr>      
   <?php
    $format = "Y/m/d";
   $sql="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid AND b.assignedby='$user' ORDER BY a.ticketid DESC ";
 $result=mysqli_query($connection,$sql);
 while($list=mysqli_fetch_array($result))
{
echo "<tr><td><a href='".$pissue."/issue_description.php?ticketid=".$list['ticketid']."'>".$list['ticketid']."</a></td><td>".$list['issuetitle']."</td><td>".$list['name']."&nbsp;&nbsp;".$list['email']."</td><td>";
date_default_timezone_set("Asia/Calcutta");
echo "".$list['time']."</td><td>".$list['assignedto']."</td><td>".$list['priority']."</td><td>".$list['status']."</td></tr>";
} 

mysqli_close($connection);
    ?> 
	</table>
	</br></br></br>
	</div>
	</body>
	</html>