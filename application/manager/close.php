<?php

require_once('../../db.php');
include('../../style.php');

?>
<head>
<link href="<?php echo $css?>/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class='main'>
<div id='caption'>Re-Start Closed/Close  Issues  (only by manager) )</div></br>
<form action="updatestatusclosed.php" method="post">
<table border="1" cellspacing=0 cellpadding=5 align="center" >
<tr><th>Ticket Id</th><th><input type="text" name="ticketid" />
<tr><td>Description </td><td><textarea name="desclose" ></textarea></td></tr>
</th>
</tr>
<tr>
<td>
Close/Re-Assign
</td>
<td>
<select name="cr">
  <option value="close" name="a" >Close</option>
  <option value="reassign" name="a">Re-assign</option>
 </select> 
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" /> </table>
</form></div>
</body>
