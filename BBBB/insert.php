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
$firstname=$_POST["fname"];
$lastname=$_POST["sname"];
$emailaddress=$_POST["email"];
$password=$_POST["password"];


$sql="INSERT INTO signup3(firstname,lastname,emailaddress,password)
VALUES('$firstname','$lastname','$emailaddress','$password')";
if(mysqli_query($conn,$sql))
{
echo "new record created successfully";
}
else
{
echo"error:".$sql."<br>".mysqli_error($conn);}
mysqli_close($conn);
?>


