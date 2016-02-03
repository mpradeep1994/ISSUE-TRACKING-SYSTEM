function verify()
{
var cname=document.getElementById('clientname');
var cna=document.getElementById('cna');
var cemail=document.getElementById('clientemail');
var cmobile=document.getElementById('clientmobile');
var caddr=document.getElementById('clientaddr');
var issuetitle=document.getElementById('issuetitle');
var issuedesc=document.getElementById('issuedesc');
var priority=document.getElementById('ipriority');
var assign=document.getElementById('engassign');
if(cname.value="")
{
cna.innerHTML="Enter Name";
cname.blur();
}
}