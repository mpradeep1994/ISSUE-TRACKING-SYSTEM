<?php

include('../../db.php');
include('../../style.php');
$ticketid=$_REQUEST['ticketid'];
$user=$_REQUEST['user'];
$query="select * from users where type='Engineer'  ";
		$result=mysqli_query($connection,$query);
?>
<div class='main'>
 <div id='caption'> Re-assign Issue</div>
 </br>
	<div id='reassign'>
	 <?php
	 echo "<table border=1 cellpadding=10><tr><td>Ticket ID</td><td>".$ticketid."</td></tr>";
	 echo "<tr><td>Assigned User</td><td>".$user."</td></tr>";
     ?>
     <tr><td>Re-assign To</td><td><table border='1' cellspacing=0 cellpadding=5>
	  <tr><th>Select</th><th>Available Users</th></tr>
		<?php
		echo "<form action='reassign_list.php?id=".$ticketid."' method='post'>";
		while($list=mysqli_fetch_array($result))
		{
         echo "<tr><td><input type='radio' name='ruser' value='".$list['username']."'></td><td>".$list['username']."</td></tr>"; 
	 
	    }
		 echo "</table></br><input type='submit' value'Assign'></form></td></tr></table>";
        ?>
		</br>
	</div>	</br></br>
</div>		
