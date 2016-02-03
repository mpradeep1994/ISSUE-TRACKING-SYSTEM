
<?php
include('../../db.php');
include('../../style.php');
?>
<head>
<script type="text/javascript">

function verify()
{
 var name=document.getElementById('name');
 var email=document.getElementById('email');
 var mobile=document.getElementById('mobile');
 var address=document.getElementById('address');
 var title=document.getElementById('title');
 var description=document.getElementById('description');
 var priority=document.getElementById('priority');
 var assign=document.getElementById('assign');
 if(document.iform.clientname.value=="")
 {
  name.innerHTML="Enter Name";
  document.iform.clientname.focus();
  return false;
 }
 else if(document.iform.clientemail.value=="")
 {
  email.innerHTML="Enter Email";
  document.iform.clientemail.focus();
  return false;
 }
 else if(document.iform.clientmobile.value=="")
 {
  mobile.innerHTML="Enter Mobile number";
  document.iform.clientmobile.focus();
  return false;
 }
 else if(document.iform.clientaddr.value=="")
 {
  address.innerHTML="Enter Address";
  document.iform.clientaddr.focus();
  return false;
 } 	 			 	
 else if(document.iform.issuetitle.value=="")
 {
  title.innerHTML="Enter Issue Title";
  document.iform.issuetitle.focus();
  return false;
 }
 else if(document.iform.issuedesc.value=="")
 {
  description.innerHTML="Enter Description";
  document.iform.issuedesc.focus();
  return false;
 }
 else if(document.iform.ipriority.selectedIndex=="")
 {
  priority.innerHTML="Select Priority";
  return false;
 }
 else if(document.iform.engassign.selectedIndex=="")
 {
  assign .innerHTML="Select User";
  document.iform.engassign.focus();
  return false;
 }
}
function ckeckn()
{
 var name=document.getElementById('name');
 if(document.iform.clientname!="")
 {
  name.innerHTML=="";
  return false;
 }
}
function validate()
{
 var email=document.getElementById('email');
 if(document.iform.clientemail!="")
 {
  var pattern = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$"; 
  var str=document.iform.clientemail.value;
  if(str.match(pattern))
   email.innerHTML="";
  else
   { 
    email.innerHTML="Enter Valid Email";
    document.iform.clientemail.focus();
   }
  }
  return false;
 }
</script>
</head>
<body>
 <div class="main">
 <div id="caption">Issue Details</div>
 <br/>
 <div id="ticketsearch">
  <form action="ticket.php" method="POST" name="iform" onSubmit="return verify()">
   <table cellspacing=10 cellpadding=10 align="center">
   
     <tr>
	  <td class='tdc'>Client Name</td>
	  <td class='tdc'><input type="text" name="clientname" on="checkn()">&nbsp;&nbsp;<span id="name"></span></td>
	 </tr>
	 <tr>
	  <td class='tdc'>Email</td>
	  <td class='tdc'><input type="text" name="clientemail" onChange="return validate()">&nbsp;&nbsp;<span id="email"></span></td>
	 </tr>
	 <tr>
	  <td class='tdc'>Mobile</td>
	  <td class='tdc'><input type="text" name="clientmobile">&nbsp;&nbsp;<span id="mobile"></span></td>
	 </tr>
	  <td class='tdc'>Address</td>
	  <td class='tdc'><input type="text" name="clientaddr">&nbsp;&nbsp;<span id="address"></span></td>
	 </tr>
     <tr>
	  <td class='tdc'>Issue Title</td>
	  <td class='tdc'><input type="text" name="issuetitle" >&nbsp;&nbsp;<span id="title"></span></td>
	 </tr>
	 <tr>
	  <td class='tdc'>Description</td>
	  <td class='tdc'><textarea name="issuedesc" size=100></textarea></br>&nbsp;&nbsp;<span id="description"></span></td>
	 </tr>
	 <tr>
	  <td class='tdc'>Priority</td>
	  <td class='tdc'>
	   <select name="ipriority">
	    <option >Select</option>
	    <option value="Urgent">Urgent</option>
	    <option value="Medium">Medium</option>
	    <option value="Low">Low</option>
	   </select>&nbsp;&nbsp;<span id="priority"></span>
	  </td>
	 </tr> 
	 <tr>
 <td class='tdc'>Assign To</td>
 <td class='tdc'>(WILL BE ASSIGNED BY MANAGER)</td>
</tr>

	  <td class='tdc'></td>
	  <td class='tdc'><input type="submit" value="Generate Ticket" class="gtbutton" >&nbsp;&nbsp;&nbsp; <input type="reset" value="Reseet" class="gtbutton" ></td>
	 </tr>
	 </table>
	 </form>

</div>
</br></br>
 </div>
 </body>