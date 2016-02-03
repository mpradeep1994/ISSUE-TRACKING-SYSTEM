<?php
session_start();
if(!isset($_SESSION['username']))
{
header('Location:'.$root.'/index.php');
}
$user=$_SESSION['username'];
include('dir.php');
include('db.php');
$name=$_SESSION['name'];
//$nam=mysqli_query($connection,"SELECT name FROM users WHERE username='.$user.' ");
//$name = mysqli_fetch_array($nam);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $css?>/style.css">
</head>
<body>
<br/>
<?php

 if($_SESSION['user_type']=='Customer')
 {
  echo "<div id='leftbar'>
        <ul>
	     <li id='userdisp'>Welcome : $name</li>
		  <li><a href='".$pexecutive."/message.php' >Messages</a></li>
         <li><a href='".$pexecutive."/issue.php' >register new issue</a></li>
		 <li><a href='".$pexecutive."/newlist.php'>Issue List</a></li>
		 <li><a href='".$pissue."/ticketsearch.php'>Ticket Search</a></li>
		 <li><a href='".$root."/logout.php'>Logout</a></li>
        </ul>
       </div>";
  }
  else if($_SESSION['user_type']=='Engineer')
  {
	echo "<div id='leftbar'>
        <ul>
	     <li id='userdisp'>Welcome : $name</li>
         <li><a href='".$pengineer."/enewlist.php'>Resolve-New Issues</a></li>
		  <li><a href='".$pengineer."/message.php' >Messages</a></li>
		 <li><a href='".$pengineer."/resolvedlist.php'>Resolved Issues</a></li>
		 <li><a href='".$pengineer."/issuelist.php' >Issue List</a></li>
		 		 <li><a href='".$root."/logout.php'>Logout</a></li>
        </ul>
       </div>";
  }	
  else
  {
//manager
	echo "<div id='leftbar'>
        <ul>
	     <li id='userdisp'>Welcome : $name</li>
		 	<li><a href='".$pmanager."/index.php' >New issues</a></li>
			<li><a href='".$pmanager."/issuelist.php' title='It contains the list of issues'>Issue List</a></li>
			<li><a href='".$pmanager."/resolvedlist.php' title='It contains the list of issues that are solved' >Resolved issues</a></li>
			<li><a href='".$pmanager."/closedlist.php' title='It contains the list of issues that cannot be solved' >Closed issues</a></li>
			<li><a href='".$pmanager."/close.php' >Close / Re-Assign issue</a></li>
			 <li><a href='".$pissue."/ticketsearch.php'>Ticket Search</a></li>
			  <li><a href='".$report."/empsearch.php'>Search Employee details</a></li>
			<li><a href='".$report."/emp.php' >EMPLOYEE DETAILS</a></li>
			<li><a href='".$report."/datesearch.php' >SEARCH DATE</a></li>
            <li><a href='".$root."/logout.php'>Logout</a></li>
        </ul>
       </div>";
   }
?>   
</body>
</html>
   	