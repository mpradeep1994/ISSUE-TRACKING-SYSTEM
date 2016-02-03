<?php

include('../../db.php');
include('../../style.php');
$username=$_SESSION['username'];
$query="SELECT * from message where status='New' AND username='' order by time DESC";

?><head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>

<div class='main'>
 <div id='caption'>Message</div>
 <br/>
 <br/>
 <table border="1" cellspacing=0 cellpadding=5 align="center" >
  <tr><th>From</th><th>Subject</th><th>Date and Time</th></tr>
<?php
$format = "Y-m-d";
$iresult=mysqli_query($connection,$query);
while($result=mysqli_fetch_array($iresult))
{
echo "<tr><td>".$result['loggedby']."</td><td><a href='read_message.php?ticketid=".$result['ticketid']."'>New Task assigned ID:".$result['ticketid']."</a></td><td>";
date_default_timezone_set("Asia/Calcutta");
echo "".$result['time']."</td></tr>";

}

?>
 
 </table>
<br/><br/></div>