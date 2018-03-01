<script>
function makerequest(serverPage, objID) 
{
	var obj = document.getElementById(objID);
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			obj.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.send(null);
}
</script>
<div id="objID">fdfg</div>AA