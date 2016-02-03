<?php

require_once('../../db.php');
include('../../style.php');
require('pagination.php');
?>

<?php 
$page=1;//Default page
$limit=5;//Records per page
$start=0;//starts displaying records from 0
if(isset($_GET['page']) && $_GET['page']!='')
{
$page=$_GET['page'];
}
$start=($page-1)*$limit;

?>

<?php
//Get total records (you can also use MySQL COUNT function to count records)
$query=mysqli_query($connection,"select ticketid from issuedetails");
$rows=mysqli_num_rows($query);
?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $css?>/pagination.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
 <div id="caption">Issue List</div>
 </br>
<table border="1" cellspacing=0 cellpadding=5 id="table" align="center">

<tr><th>Ticket Id</th><th>Issue Title</th><th>Client Name and Contact Details</th> <th>Date and Time</th><th>Assigned To</th><th>Priority</th>
<th>Status</th></tr>      

   <?php
   $format = "M d, Y h:ia";
   $sql="SELECT a.ticketid,b.issuetitle,a.name,a.email,a.mobile,a.address,a.time,b.assignedto,b.assignedby,b.priority,b.status,b.issuedesc FROM issueclient a,issuedetails b where a.ticketid=b.ticketid order by a.ticketid ASC  ";
 $result=mysqli_query($connection,$sql);
 if(mysqli_num_rows($result)>0){
 while($list=mysqli_fetch_array($result))
{
echo "<tr><td><a href='".$pissue."/issue_description.php?ticketid=".$list['ticketid']."'>".$list['ticketid']."</a></td><td>".$list['issuetitle']."</td><td>".$list['name']."&nbsp;&nbsp;".$list['email']."</td><td>";
date_default_timezone_set("Asia/Calcutta");
echo date($format, $list['time'])."</td><td>".$list['assignedto']."</td><td>".$list['priority']."</td><td>".$list['status']."</td></tr>";
} }

?>
<?php
//echo pagination($limit,$page,'pagination.php?page=',$rows); 
//mysqli_close($connection);
?> 
	
</table></br></br></br></div>
	</body>
	</html>
	