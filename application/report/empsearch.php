
<?php 
include('../../style.php');
require_once('../../db.php');
include('../../dir.php');

?>
<div class="main">
<div id="caption">Ticket Search</div>
</br></br></br>
<table border="0" id="ticketsearch">
<form action="<?php echo $report?>/details.php" method="POST">
<tr>
 <td class="tdc">Enter the Employee Name : </br></br></td></tr>
<tr>
 <td class="tdc"><input type="text" name="username" width="30">
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