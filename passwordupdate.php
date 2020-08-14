<?php
session_start();
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$name=$_SESSION['name'];
if($password==$repassword){
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
$update="UPDATE handbook SET password='$password' WHERE name='$name'";
$connection->query($update);
echo("<script>alert('Your password has succesfully updated.'); window.location.href='new project hyperlinked.html'; </script>");

}
else
echo ("Password not matched.");
?>