<?php
include('../../style.php');
require_once('../../db.php');
include('../../dir.php');
$ename=$_REQUEST['username'];
?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">

</head>
<?php

echo "<div class='main'><div id='caption'>EMPLOYEE   REPORT </div></br><div id=\"tab\">";;
echo " <center> </center>";
echo " <table border='2' cellspacing=2 cellpadding=18 align='center'>";

echo "<th colspan='2'><center><label>DETAILS</label></center></th>";

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


echo "<tr><th>Employee Name</th><td>".$ename."</td></tr>";
echo "<tr><th>Total No. of Issues Assigned</th><td>".$c."</td></tr>";

echo "<tr><th>Urgent Level Issues (Assigned)</th><td>".$ce1."</td></tr>";
echo "<tr><th>Medium Level Issues (Assigned)</th><td>".$ce2."</td></tr>";
echo "<tr><th>Low Level Issues (Assigned)</th><td>".$ce3."</td></tr>";
echo "<tr><th>No. of Issues resolved</th><td>".$ce."</td></tr>";
echo "<tr><th>Urgent Level Issues (Resolved)</th><td>".$ce4."</td></tr>";
echo "<tr><th>Medium Level Issues (Resolved)</th><td>".$ce5."</td></tr>";
echo "<tr><th>Low Level Issues (Resolved)</th><td>".$ce6."</td></tr>";
echo "<tr><td><form action='".$pmanager."/index.php' method='post'><button type='submit'>Go Home</button></form> </td></tr>";
?>


</table>
</div></br></br></br>
</div>
</body>
</html>