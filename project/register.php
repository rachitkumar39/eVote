
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
include("db.php");
  $Name =$_POST['name'];
  $Username=$_POST['username'];
  $Password=$_POST['password'];
  $Mobile=$_POST['mobile_no'];
  $Aadhar=$_POST['aadhar_card'];
 
 $dup = mysqli_query($con,"select * from user_detail where username='$Username'");
 if(mysqli_num_rows($dup)>0){
   echo "this account is already registered with our database.";
 }
 else{
 $q="insert into user_detail(name,mobile_no,aadhar_card,password,username) values('$Name','$Mobile','$Aadhar','$Password','$Username')";
		if(mysqli_query($con,$q)){
      echo "Your Evoting account has been created. Enter Username and password to login to your account " ; 
	 
		}
	    else{
        echo "this account is already exist." ;
		} 
  } 
  ?>
    </h1>
  <a href="registerportal.php"><button style="color: white;width: 100px;height: 30px;background: green;">ok</button></a>
  </div>
  <div class="bottom">
    .
  </div>

</body>

</html>