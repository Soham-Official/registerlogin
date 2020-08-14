<?php
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$repassword=$_POST['repassword'];
if($password!=$repassword)
 echo "Password not matched";
else{
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');

$select="SELECT * from table1 where email='$email'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);
if($row==1)
echo "This Email is already Used  ";
else{
    $pid=time();
    $insert="INSERT INTO table1 SET name='$name',email='$email',password='$password',participantId='$pid'";
    $connection->query($insert);
    echo "Your Account has been succesfully created<br/>";
    echo "New record has id: ".$pid."<br/>";
    echo "Please note it for further reference";
    
}}
?>