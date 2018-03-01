<?php
$dt=$_REQUEST['dt'];
$con=mysql_connect("localhost","root","");
mysql_select_db("ajax");


		$query="select * from  signup where name='$dt'";
		$res=mysql_query($query);
        echo "<table width='100%'><tr><td><b>Name</td><td><b>Addres</td><td><b>Email</td><tr>";

		while ($row=mysql_fetch_array($res))
		{
		
		
	    	
		echo "<td width='100'>$row[0]</td>";
		echo "<td width='100'>$row[1]</td>";
		
		echo "<td width='100'>$row[2]</td>";
		
		}
		echo "</table>";
		 

?>