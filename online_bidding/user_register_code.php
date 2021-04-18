<?php 
ob_start();
include 'database.php';

$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$email=$_POST['mail'];
$pass=$_POST['pwd'];
$dob=$_POST['dob'];
$gender=$_POST['gen'];
$address=$_POST['add'];
$phne=$_POST['ph'];
$password = md5($pass);
$i="insert into user_registration values('','".$first_name."','".$last_name."','".$email."','".$password."','".$dob."','".$gender."','".$address."','".$phne."')";

$vv=mysqli_query($con, $i) or die("error".mysqli_connect_error());

if($vv)
{
//echo ("registed");
header("location:index2.html");
}
else
{
echo ("Not registed");
}
?>