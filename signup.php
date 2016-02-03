<?php

 include('dir.php');
  include('db.php');

?>
 <html>
<head>
<link rel='stylesheet' href='<?php echo $css?>/style.css' type='text/css'>
</head>
<body>
<div id="caption">WELCOME TO TECHREX ISSUE TRACKING SYSTEM</div>
<br/><br/>
<br/>

<div id='login' align="center"><center>
<label id="caption" > Sign-Up here</label>
 </center>
</br></br>
<form action="insert.php" method="POST">
<table align='center' cellspacing='3' cellpadding='7'>
  <tr>
   <td class="tdc">Username :</td>
   <td class="tdc"><input type='text' class='input' name='username' ></td>
  </tr>
  <tr>
   <td class="tdc">Password :</td>
   <td class="tdc"><input type='password' class='input' name='password'></td>
  </tr><tr>
   <td class="tdc"> name:</td>
   <td class="tdc"><input type='text' class='input' name='name' ></td>
  </tr><tr>
  <td>type :</td>
   <td>
   <select name="type">
    <option value="Manager">Manager</option>
    <option value="Customer">Customer</option>
    <option value="Engineer">Engineer</option>
   </select>
  </td>
  </tr>
  <tr>
    <td></td><td class="tdc" id='userinput'><input type='submit'  value='register'></td>
  </tr>
</table>
</form>
</br>
</div>
</br></br></br>
</br>
</body>
</html>