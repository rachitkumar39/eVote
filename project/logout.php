<!DOCTYPE html>
<html>
<head>
  <title>
    e-Vote
  </title>
  <link rel="stylesheet" href="css/voterlist.css">
  <link rel="icon" href="img/logo/logo vote now.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-sm  bg-dark sticky-md-top">
    <div class="container-fluid justify-content-center">

      <ul class="navbar-nav">
        <li class="nav-item itemsofnav">
          <img src="img/logo/flower white removed.png" alt="logo" width="60">
        </li>
        <li class="nav-item itemsofnav">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item itemsofnav">
          <a class="nav-link" href="index.php#Service">News</a>
        </li>
        <li class="nav-item itemsofnav">
          <a class="nav-link" href="index.php#Service">Services</a>
        </li>
        <li class="nav-item itemsofnav">
          <a class="nav-link" href="index.php#About Us">About Us</a>
        </li>
        <li class="nav-item itemsofnav">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="logout_second_sec">
    <h1>
    <?php
session_start();

include("db.php");
if(!$_SESSION['username'])
{
  header('location:registerportal.php');
}
$username=$_SESSION['username'];
$aadhar=$_POST['aadhar'];
$vote=$_POST['gridRadios'];
//user detail
$q="select * from voter_list where username='$username'";
  $run=mysqli_query($con,$q);
  $num=mysqli_num_rows($run);
  if($num>0){
    echo	"your vote is already submitted to our database." ;
  } 
 else{
    $q="insert into voter_list(username,aadhar,vote) values('$username','$aadhar','$vote')";
    if(!mysqli_query($con,$q)){
	    
        echo "there is a technical fault." ;
            }
            else{
        
            echo "your vote has been submitted succesfully." ;
            }  
   }
session_destroy();

?>
    </h1>
  <a href="registerportal.php"><button style="color: white;width: 100px;height: 30px;background: green;">ok</button></a>
  </div>
  <div class="bottom">
    .
  </div>

</body>

</html>