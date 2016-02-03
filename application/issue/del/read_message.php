<?php

include('../../db.php');
include('../../style.php');
$username=$_SESSION['username'];
$msgid=$_REQUEST['msgid'];
$query="SELECT * from message where username='".$username."' AND msgid='$msgid'";

?>

<div class='main'>
 <div id='caption'>Message</div></br>
 <table border="1" cellspacing=0 cellpadding=10 align="center">

<?php
$format = "M d, Y h:ia";
$iresult=mysqli_query($connection,$query);

$result=mysqli_fetch_array($iresult);
echo "  <form action='msgupdate.php?ticketid=".$result['ticketid']."' method='POST'><tr><td>From</td><td>".$result['loggedby']."</td></tr><tr><td>Date & Time</td><td>";
date_default_timezone_set("Asia/Calcutta");
echo date($format, $result['time'])."</td></tr>";
echo "<tr><td>Message</td><td></br>".$result['message']."</br>";
echo "<input type='submit' value='Ok'></td></tr></form>";

?>
 
</table></br>
</div>