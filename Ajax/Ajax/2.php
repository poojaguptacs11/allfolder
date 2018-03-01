
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function getvalue(str)
{

var XMLHttpRequestObject=false;

if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}

XMLHttpRequestObject.open("GET","data2.php?dt="+str, true);
XMLHttpRequestObject.send(null);

XMLHttpRequestObject.onreadystatechange = function()
{
if(XMLHttpRequestObject.readyState == 4)
{
document.getElementById('txt').innerHTML = XMLHttpRequestObject.responseText;
}
} 

}
</script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center">

<form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="364" border="1">
    <tr>
      <td width="98">Name</td>
      <td width="144"><input type="text" name="select" onchange="getvalue(this.value)" /></td>
      <td width="100"><id="txt">
&nbsp;
</div>
</td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type="text" name="textfield" id="textfield" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>

</body>
</html>
