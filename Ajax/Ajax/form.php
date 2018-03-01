<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="438" border="1">
    <tr>
      <td width="59">username</td>
      <td width="363"><label for="textfield2"></label>
      <input type="text" name="textfield" id="textfield2" value="Your Name" onfocus="if(this.value=='Your Name')this.value=''" onblur="if(this.value=='')this.value='Your Name'" /></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="text" name="textfield2" id="textfield" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="textfield3" id="textfield3" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="radio" id="radio" value="radio" />
      <label for="radio">ma</label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><p>DoB</p></td>
      <td><label for="select"></label>
        <select name="select" id="select">
          <option>select</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
        </select>
        Day 
        <label for="select2"></label>
        <select name="select2" id="select2">
          <option>monday</option>
          <option>tuesday</option>
          <option>wednaesday</option>
        </select> 
        month 
        <label for="select3"></label>
        <select name="select3" id="select3">
          <option>1991</option>
          <option>1992</option>
          <option>1993</option>
          <option>1994</option>
        </select> 
        year</td>
    </tr>
    <tr>
      <td>State</td>
      <td><select name="select4" id="select4">
        <option>u.p</option>
        <option>punjab</option>
      </select></td>
    </tr>
    <tr>
      <td>City</td>
      <td><select name="select5" id="select5">
        <option>agra</option>
        <option>chandighad</option>
      </select></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>