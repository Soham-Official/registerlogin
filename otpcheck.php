<?php
session_start();
$otpentered=$_POST['otpentered'];
if($_SESSION['otpentered']==$otpentered)
header('location:changepassword.html');
else
echo("<script>alert('Enter Correct OTP.')</script>");
?>