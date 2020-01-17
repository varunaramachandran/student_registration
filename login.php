<?php
include 'controller/controller.php';
if(isset($_POST['submit']))
{
	$user_name=$_POST['user_name'];
	$pass=$_POST['pass'];
	$con=new controller();
	$con->login($user_name,$pass);

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/textstyle.css">
<style>
</style>	
<head>
	
<body>
<center>
<div class="var" style="height: 300px;margin-top:60px">
<div>
<form name="form"  method="post" >
<h2 style="color: white">LOGIN</h2></div>
<table> 
    <tr>
    <td>User Name:</td>
    <td><input type="text" class="frm" name="user_name"></td>
	</tr>
	<tr>
	<td>Password:</td>
    <td><input type="password" class="frm" name="pass"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" class="frm-btn" name="submit" value="Submit"></td>
	</tr>
	<tr><td></td><td><input type="radio" name="keep" value="keep">Keep Me Logged In</td></tr>
<tr><td></td><td><a href="change_pwd.php">Forgot Password?..</a></td></tr>
</table>	
</form>
</div>
</div>
</center>
</body>
</html>
