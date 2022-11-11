<?php
session_start();

include("db.php");
  $email=$_SESSION['username']=$_POST['username'];
  $password=$_POST['password'];
  $q="select * from user_detail where username='$email' AND password='$password'";
  $run=mysqli_query($con,$q);
  $num=mysqli_num_rows($run);
  if($num>0){
  echo "<script>
  
  window.open('voterlist.php','_self')
  </script>";  
  } 
 else{
	  echo "<script>window.open('registerportal.php?incorrect=username or password is incorrect','_self')</script>";  
   }
 ?>
 <html>
  <head>
  </head>
 <body>
 </body>
</html>