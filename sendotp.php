<?php
$email=$_POST['email'];
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
$select="SELECT * from handbook where email='$email'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);
if($row==1){
session_start();
$a=mysqli_fetch_assoc($check);
$_SESSION['name']=$a['name'];
$_SESSION['email']=$email;
$to=$email;
$otp=rand(1000,9999);
$subject="OTP";
$text=("Hello".$_SESSION['name']."Your OTP is".$otp);
$headers="From:samrat.chakraborty2000@gmail.com"."\r\n";
mail($to,$subject,$text,$headers);
    header('location:sendotp.html');

$_SESSION['otpentered']=$otp;
}
else

echo("
    <script>
        alert('Email have not registered');
    </script>
   
");
echo("<html>Sign-in to Handbook <a href='handbook.html'>Click Here</a></html>");
?>