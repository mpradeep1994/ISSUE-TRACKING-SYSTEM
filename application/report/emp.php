<?php
include('../../style.php');
require_once('../../db.php');
include('../../dir.php');

$query="select * from users where type='engineer'  ";
		$result=mysqli_query($connection,$query);
?>

<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">

</head>
<?php

echo "<div class='main'><div id='caption'>EMPLOYES  &   ISSUES  REPORT </div></br><div id=\"tab\">";
echo " <center> U -URGENT M -MEDIUM L -LOW </center>";
echo " <table border='2' cellspacing=2 cellpadding=18 align='center'>";
$i='1';
echo "<th colspan='2'><center><label>employee list</label></center></th><th colspan='4'>Issues Assigned</th><th colspan='5'> Issues   Resolved</th>";
echo "<tr><th>S.No</th><th>Employee Name</th><th>U</th><th>M</th><th>L</th><th> Total</th><th>U</th><th>M</th><th>L</th><th>Total</th><th>Action</th></tr>";
while($list=mysqli_fetch_array($result))
{{
$ename=$list['username'];
//issues assigned
$iss="select * from issuedetails where assignedto='$ename'";  
$re=mysqli_query($connection,$iss);
$c=mysqli_num_rows($re);
//issues resolved
$isse="select * from issuedetails where assignedto='$ename' AND status='Resolved'";
$ree=mysqli_query($connection,$isse);
$ce=mysqli_num_rows($ree);
//issues urgent
$isse1="select * from issuedetails where assignedto='$ename'  AND priority='Urgent'";
$ree1=mysqli_query($connection,$isse1);
$ce1=mysqli_num_rows($ree1);
//issues medium
$isse2="select * from issuedetails where assignedto='$ename' AND priority='Medium' ";
$ree2=mysqli_query($connection,$isse2);
$ce2=mysqli_num_rows($ree2);
//issues low
$isse3="select * from issuedetails where assignedto='$ename' AND priority='Low'";
$ree3=mysqli_query($connection,$isse3);
$ce3=mysqli_num_rows($ree3);
//issues urgent
$isse4="select * from issuedetails where assignedto='$ename'  AND priority='Urgent' AND status='Resolved'";
$ree4=mysqli_query($connection,$isse4);
$ce4=mysqli_num_rows($ree4);
//issues medium
$isse5="select * from issuedetails where assignedto='$ename' AND priority='Medium' AND status='Resolved'";
$ree5=mysqli_query($connection,$isse5);
$ce5=mysqli_num_rows($ree5);
//issues low
$isse6="select * from issuedetails where assignedto='$ename' AND priority='Low' AND status='Resolved'";
$ree6=mysqli_query($connection,$isse6);
$ce6=mysqli_num_rows($ree6);

}
echo "<tr><td>".$i. "</td><td>".$list['username']."</td><td>".$ce1."</td><td>".$ce2."</td><td>".$ce3."</td><td>".$c."</td><td>".$ce4."</td><td>".$ce5."</td><td>".$ce6."</td><td>".$ce."</td><td><a href='details.php?username=".$list['username']."'> DETAILS</a> </td></tr>";
$i++;
}

?>

</table>
</div></br></br></br>
</div>
</body>
