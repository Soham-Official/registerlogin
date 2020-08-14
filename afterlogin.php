<?php
session_start();
if(isset($_SESSION['email']))
  header('location:new project hyperlinked.html');
 echo(" <script>alert('Login Successful')</script>");
$name=$_SESSION['name']; 
$participantId=$_SESSION['participantId'];
//session_destroy();
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
$select="SELECT * from table2 where participantId='$participantId'";
//echo "HELLO ".$name."<br/>";
$result=$connection->query($select);
session_start();

?>
 <html>
     <head>
         <title>Login</title>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style>
             div.container{
                 width:100%;
                text-align: center;
                 margin-top:6%;
             }
             .btn-primary{
                 color:white;
                 
             }
             .form-control{
                 width:50%;
                 margin-left:25%;
             }
         </style>
     </head>
   <body>
       <div class="container"> 
  <h2>HELLO!! <?php echo $name?></h2><br>
  <h4>You Have Registered To The Following Events So Far</h4><br><br><br>
  <form method="post" action="eventStatus.php" >
       <select class="form-control" name="eventName" >
          
 <?php
 while($row=mysqli_fetch_array($result)){
     $eventName=$row[2];
     echo"<option>$eventName<br></option>";}
    ?>  
  </select><br><br><br>
  <button class="btn btn-danger" value="submit">GO</button>
  </form>
</div>
</body>
</html>
   
 
      