<?php
//mysql connection
$con=mysql_connect("localhost","root","");

if(!$con)
{die('connection error');}
else
echo"connected successfully </br>";
//create database
//$db="CREATE DATABASE 6cmt2";
//mysql_query ($db,$con);
//mysql_select_db ('6cmt2',$con);
/*$sql="INSERT INTO student_info(Name,Roll,Reg,Department)
values('rafi','13','15','computer')";
mysql_query ($sql,$con);*/
?>