<?php
$email=$_POST['email'];
$event=$_POST['event'];
$pieces = explode(" ", $event);
$eventId=""; 
foreach($pieces as $piece)
{
    $eventId =$eventId.$piece[0]; 
    
} 

$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');

$select="SELECT * from table1 where email='$email'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);
if($row==1){
   session_start();
  $fetch=mysqli_fetch_assoc($check);

  $_SESSION['Name']=$fetch['Name'];
  $_SESSION['participantId']=$fetch['participantId'];
  $participantId=$_SESSION['participantId'];
  $select1="SELECT * from table2 where participantId='$participantId' and eventName='$event'";
   if(Mysqli_num_rows($connection->query($select1))>=1){
       echo "Already Registered";
  

}
    else{
          $insert2="INSERT INTO table2 SET eventId='$eventId',eventName='$event',participantId='$participantId'";
    $status=$connection->query($insert2);
 if( $status==true)
    echo "success";
        
    }
}
else{
    echo "Seems you haven't signedup yet please signup first then come to register"; 
}
?>