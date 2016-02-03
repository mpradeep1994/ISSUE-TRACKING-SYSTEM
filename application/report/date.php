<?php
include('../../style.php');
require_once('../../db.php');
include('../../dir.php');
$date1=$_REQUEST['date1'];
$date2=$_REQUEST['date2'];
$format=date('Y-m-d');
$sql= "SELECT * FROM `issuedetails` WHERE time BETWEEN
'$date1' AND '$date2' ";
	

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

<tr><th>Ticket Id</th><th>Issue Title</th> <th>Date </th><th>Logged By</th><th>Assigned To</th><th>Priority</th>
<th>Status</th></tr>      
   <?php
   $format = "Y-md";
   $result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)>0){
	while($list=mysqli_fetch_array($result))	
	 {
echo "<tr><td><a href='issue_description.php?ticketid=".$list['ticketid']."'>".$list['ticketid']."</td><td>".$list['issuetitle']."</br>".$list['issuedesc']."</td>";
echo  "<td>".$list['time']."</td><td>".$list['assignedby']."</td><td>".$list['assignedto']."</td><td>".$list['priority']."</td><td>".$list['status']."</td></tr>";
} }


?>
</table>
	</br>

<?php
//echo pagination($limit,$page,'pagination.php?page=',$rows); //call functiontso show pagination
//mysqli_close($connection);
?> 
	</br></br>
	</div>
	</body>
	</html>

