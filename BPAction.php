<?php
include('Connection.php');
$CatagoryName= $_POST['CatagoryName'];
$Date=$_POST['Date'];
 $Post_Header=$_POST['Post_Title'];
$Bangladesh_Post=$_POST['Post_Discription'];
$file_name=$_FILES['Post_file']['name'];
$tmp=$_FILES['Post_file']['tmp_name'];
$target='upload/'.$file_name;

if(move_uploaded_file($tmp,$target))
{


//database select
mysql_select_db("ALM",$con);
//insert data .here reg is table name

$sql="INSERT INTO alm.BanPost (CatagoryName,Date,Post_Heder,B_Post,Post_Pic) VALUES ('$CatagoryName','$Date','$Post_Header','$Bangladesh_Post','$target')";

if(!mysql_query($sql,$con))
{echo"error";}
else 
{
	include('HomeLogin.php');
}
}
else
	echo 'File not uploaded';
mysql_close($con);
?>
