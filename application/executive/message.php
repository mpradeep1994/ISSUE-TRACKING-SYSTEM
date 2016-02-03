<?php
include('../../db.php');
include('../../style.php');
$username=$_SESSION['username'];
$query="SELECT * FROM message WHERE loggedby='$username' AND status='1' order by time ASC";
?><head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>


<div class='main'>
<div id='caption'>Message</div>
<br/>
<br/>
<table border="1" cellspacing=0 cellpadding=5 align="center" >
<tr><th>Tickect ID</th><th>ISSUE RESOLVED DESCRIPTION</th><th>Date and Time</th></tr>
<?php
$format = "Y/m/d";
$iresult=mysqli_query($connection,$query);
while($result=mysqli_fetch_array($iresult))
{
echo "<tr><td>".$result['ticketid']."</td><td><a href='read_message.php?ticketid=".$result['ticketid']."'>ISSUE:".$result['message']."</a></td><td>";
date_default_timezone_set("Asia/Calcutta");
echo "".$result['time']."</td></tr>";
}
?>
 
 </table>
<br/><br/></div>