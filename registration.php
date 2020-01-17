<?php
include 'controller/controller.php';
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['mobile'];
  $dept_name=$_POST['dept_name'];
  $cname=$_POST['cname'];
  $pass=$_POST['pass'];
  $email=$_POST['email'];
  $user_name=$_POST['user_name'];
  $semno=$_POST['semno'];
  $year=$_POST['year'];
 
 $con=new controller();
 $con->display($fname,$lname,$mobile,$dept_name,$cname,$pass,$email,$user_name,$semno,$year);

}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/textstyle.css">
<title>
</title>


<center>
<div  class="var"style="border:2px solid red; width:30%;">
<h2 style="color :white"> REGISTRATION FORM </h2>
<form method="post" name="reg" onsubmit="return validate()">
<table align="center" width="50%" border="0" style="padding:10px;">
<tr> 
<td>First Name</td><td><input type="text" class="frm"  name="fname"> </td>
</tr>
<tr> 
<td>Last Name</td><td><input type="text" class="frm" name="lname"> </td>
</tr>
<tr> 
<td>Mobile</td><td><input type="mobile" class="frm" name="mobile"> </td>
</tr>
<tr> 
<td>Department Name</td><td><input type="text" class="frm" name="dept_name"> </td>
</tr>
<tr> 
<td>Course Name</td><td><input type="text" class="frm" name="cname"> </td>
</tr>
<tr> 
<td>password</td><td><input type="text" class="frm" name="pass"> </td>
</tr>
<tr> 
<td>Email</td><td><input type="email" class="frm" name="email"> </td>
</tr>
<tr> 
<td>User Name</td><td><input type="text" class="frm" name="user_name"> </td>
</tr>
<tr> 
<td>Semester No</td><td><input type="number"  class="frm" name="semno"> </td>
</tr>
<tr> 
<td>Year</td><td><input type="number" class="frm" name="year"> </td>
</tr>
<tr> 
<td></td><td><input type="submit" name="submit" class="frm-btn" value="Submit"> </td>
</tr>
</td>
</tr>
</table>
</form>
</div>
</center>