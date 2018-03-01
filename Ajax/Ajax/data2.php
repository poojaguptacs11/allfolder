<?php
$dt=$_REQUEST['dt'];
$con=mysql_connect("localhost","root","");
mysql_select_db("hariom");


		$query="select * from  signup where name='$dt'";
		$res=mysql_query($query);
        if (mysql_num_rows($res)==1)
		echo "<font color='red'> Name Already Exist</font>";
		else
		echo "<font color='red'>Available</font>";
	 

?>