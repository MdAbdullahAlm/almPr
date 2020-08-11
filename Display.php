<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<table>
<tr>
<th> Auto_Id</th>
<th> User_Name</th>
<th> First_Name</th>
<th> Last_Name</th>
<th> Full_Name</th>
<th> Email</th>
<th> Gender</th>
<th> BirthDay</th>
<th> Accept_Condition</th>

</tr>
<?php
include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT *FROM studentInfo";
$display=mysql_query($result,$con);
while($row=mysql_fetch_array($display))
{
	echo"<tr>";
	echo"<td>".$row['auto_Id']."</td>";
	echo"<td>".$row['User_Name']."</td>";
	echo"<td>".$row['First_Name']."</td>";
	echo"<td>".$row['Last_Name']."</td>";
	echo"<td>".$row['Full_Name']."</td>";
	echo"<td>".$row['Email']."</td>";
	echo"<td>".$row['Gender']."</td>";
	echo"<td>".$row['BirthDay']."</td>";
	echo"<td>".$row['Accept_Condition']."</td>";

	echo"</tr>";
}
?>
</table>
</body>
</html>