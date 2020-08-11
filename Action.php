<?php
include('Connection.php');
$userName=$_POST['userName'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$FullName=$firstName.' '.$lastName;
$email=$_POST['userEmail'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$gender=$_POST['gender'];
$bdate=$_POST['birthdate'];
$Accept_Condition=$_POST['terms'];

//database select
mysql_select_db("ALM",$con);
//insert data .here reg is table name
$sql="INSERT INTO alm.studentinfo ( User_Name, First_Name, Last_Name, Full_Name, Password, Confirm_Password, Email, Gender, BirthDay, Accept_Condition) 
VALUES ( '$userName', '$firstName', '$lastName', '$FullName', '$password', '$confirm_password', '$email', '$gender', '$bdate', '$Accept_Condition')";



if(!mysql_query($sql,$con))
{echo"error";}
else 
{
	include('Display.php');
}
mysql_close($con);
?>
