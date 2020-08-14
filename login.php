<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');

$select="SELECT * from table1 where email='$email' and password ='$password'";

$check=($connection->query($select));
$row=Mysqli_num_rows($check);

if($row==1){
session_start();
$a=mysqli_fetch_assoc($check);


$_SESSION['name']=$a['name'];
$_SESSION['participantId']=$a['participantId'];
$_SESSION['id']=$a['id'];


//echo ("<script>alert('Login Successful');</script");
header('location:afterlogin.php');}
else
echo("Wrong Credentials");

?>