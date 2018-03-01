
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
	
	XMLHttpRequestObject.open("GET", "data1.php?dt="+str, true);
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
<span class="style1">Choose Name</span>
<select name="select" onchange="getvalue(this.value)">
<option>Select Name</option>
<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("ajax");
$query="select  name  from signup ";
$res=mysql_query($query);
while ($row=mysql_fetch_array($res))
{
echo "<option value=$row[0]> $row[0]</option>";
}
?>
</select>
</form>
</div>

<div id="txt">
&nbsp;
</div>
</body>
</html>
