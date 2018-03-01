		
<select name='select2'>

<?php
$dt=$_REQUEST['dt'];

$con=mysql_connect("localhost","root","");
mysql_select_db("ajax");
echo $query="select * from  record where city='$dt'";
$res=mysql_query($query);

while ($row=mysql_fetch_assoc($res))
{
?>

<option><?php echo $row[1]?></option>
<?php }?>

</select>


