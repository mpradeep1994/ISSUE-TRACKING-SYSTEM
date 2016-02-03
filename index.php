<?php

 include('dir.php');

?>
 
<html>
<head>
<link rel='stylesheet' href='<?php echo $css?>/style.css' type='text/css'>
</head>
<body>
<div id="caption">WELCOME TO TECHREX ISSUE TRACKING SYSTEM</div>
<br/><br/>
<br/>

<div id='login'  align="center">


<center>
<label id="caption">Sign in here</label>
</center>
</br></br>
<form action="signin.php" method="POST">
<table align='center' cellspacing='3' cellpadding='7'>
  <tr>
   <td class="tdc">Username :</td>
   <td class="tdc"><input type='text' class='input' name='username' ></td>
  </tr>
  <tr>
   <td class="tdc">Password :</td>
   <td class="tdc"><input type='password' class='input' name='password'></td>
  </tr>
  <tr>
    <td class="tdc"></td><td class="tdc" id='userinput'><input type='submit' onclick='validate()' class='gtbutton' value='Login'></form>
	  <form action="signup.php" method="post">
 <input name="submit"  type="submit" align="right" class='gtbutton' value="Sign-up"/>
  </form> 
 </td>
 </tr>
</table>


</br>

</br>
</div>
</br></br></br>
</br>
</body>
</html>