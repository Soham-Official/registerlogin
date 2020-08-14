<?php
session_start();
$eventName=$_POST['eventName'];
//echo $eventName;
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
$Select="SELECT * from table3 where EventName='$eventName'";
$result=$connection->query($Select);
$row=Mysqli_num_rows($result);
session_start();
$a=mysqli_fetch_assoc($result);
$_SESSION['status']=$a['status'];
$_SESSION['eventName']=$a['EventName'];
$_SESSION['eventId']=$a['EventId'];
//echo $_SESSION['status'];
//echo  $_SESSION['eventName'];
//echo $_SESSION['eventId'];
if($_SESSION['status']==1){
   header('location:certificatedownload.php');
}
else{
    echo "Under Process";
}
?>





