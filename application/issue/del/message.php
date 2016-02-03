<?php
include('../../db.php');
include('../../style.php');
$username=$_SESSION['username'];
$query="SELECT * FROM message WHERE  AND status='1' order by time ASC";
?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>

<div class='main'>
<div id='caption'>Message</div>
<br/>
<br/>
<table border="1" cellspacing=0 cellpadding=5 align="center" >
<tr><th>From</th><th>Subject</th><th>Date and Time</th></tr>
<?php
$format = "M d, Y h:ia";
$iresult=mysqli_query($connection,$query);
while($result=mysqli_fetch_array($iresult))
{
echo "<tr><td>".$result['loggedby']."</td><td><a href='read_message.php?msgid=".$result['msgid']."'>ISSUE RESOLVED:".$result['ticketid']."</a></td><td>";
date_default_timezone_set("Asia/Calcutta");
echo date($format, $result['time'])."</td></tr>";
}
?>
 
 </table>
<br/><br/></div>