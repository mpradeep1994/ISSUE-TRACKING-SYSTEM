<?php

include('../../db.php');
include('../../style.php');
$username=$_SESSION['username'];
$ticketid=$_REQUEST['ticketid'];
$query="SELECT * from message where ticketid='$ticketid'";

?>

<div class='main'>
 <div id='caption'>Message</div></br>
 <table border="1" cellspacing=0 cellpadding=10 align="center">

<?php
$format = "Y/m/d";
$iresult=mysqli_query($connection,$query);

$result=mysqli_fetch_array($iresult);
echo "  <form action='msgupdate.php?ticketid=".$ticketid."' method='POST'><tr><td>From</td><td>".$result['loggedby']."</td></tr><tr><td>Date & Time</td><td>";
echo "".$result['time']."</td></tr>";
echo "<tr><td>Message</td><td></br>".$result['message']."</br>";
echo "<input type='submit' value='Ok'></td></tr></form>";

?>
 
</table></br>
</div>