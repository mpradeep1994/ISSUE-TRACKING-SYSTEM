<?php 

require_once('../../db.php');
include('../../dir.php');
include('../../style.php');
?>
<div class="main">
<div id="caption">Ticket Search</div>
</br></br></br>
<table border="0" id="ticketsearch">
<form action="<?php echo $report?>/date.php" method="POST">
<tr>
 <td class="tdc">Enter dates In FORMAT(YYYY-MM-DD) </br></br></td></tr>
<tr> 
 <td class="tdc">FROM DATE :<input type="text" name="date1" width="30">
 </td>
 </tr>
 <tr>
 <td>TO DATE :<input type="text" name="date2" width="30">
 </td>
 </tr>
 <tr>
  <td class="tdc"></br><input type="submit" value="Search Details" class="gtbutton"></td>
 </tr>
 </form>
 </table>
 </br>
 </br>
 </br>
 </br></br></br></br>
 
 </div>
