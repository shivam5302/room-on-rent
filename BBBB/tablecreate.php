<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$sql="CREATE TABLE signup3(
firstname VARCHAR (15) NOT NULL,
lastname VARCHAR (15) NOT NULL,
emailaddress VARCHAR (50) NOT NULL,
password VARCHAR (15) NOT NULL

)";

if(mysqli_query ($conn,$sql))
{
echo "Table project created successfully";
}
else 
{
echo " error creating table".mysqli_error($conn);
}
mysqli_close($conn);
?>
