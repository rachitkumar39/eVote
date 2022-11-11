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
$f_name=$_POST['firstname'];
$l_name=$_POST['lastname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$q="insert into contact_us(first_name,last_name,email,subject,message) values('$f_name','$l_name','$email','$subject','$message')";
if(mysqli_query($con,$q)){
    echo "Thank you for contacting us we will revert you soon.";
}
else{
    echo "sorry for the inconvenience please check your internet connection.";
}
?>
    </h1>
  <a href="contactus.php"><button style="color: white;width: 100px;height: 30px;background: green;">ok</button></a>
  </div>
  <div class="bottom">
    .
  </div>

</body>

</html>