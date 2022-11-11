<?php
session_start();
include("db.php");
if (!$_SESSION['username']) {
  header('location:registerportal.php');
}
$username = $_SESSION['username'];

$q = "select * from user_detail where username='$username'";
$temp = mysqli_query($con, $q);
$real = mysqli_fetch_assoc($temp);
$aadhar = $real['aadhar_card'];
$name = $real['name'];

?>
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
  <div class=" second">
    <div class="detail_sec">
      <div class="name_1">
        <?php
        echo "Hello $name,";
        ?>
      </div>
      <div class="logout">
        <a href="logout1.php">Logout</a>
      </div>
    </div>

    <div>
      <div class="text1">
        <h3>Cast your vote for the post of classroom coordinator[MCA(AKGEC)]</h3>
      </div>
      <div class="second1">
        <form class="form-container" action="logout.php" method="post">
          <input name="username" value="<?php echo $username; ?>" type="hidden">
          <input name="aadhar" value="<?php echo $aadhar; ?>" type="hidden">
          <legend class="f1">
            <h1>Candidate List</h1>
          </legend>
          <div class="box">
            <div class="box1">
            <img src="img/chinh/fish.png" style="width:100px; height:50px;">
            <img src="img/chinh/glass.png" style="width:100px; height:50px;">
            <img src="img/chinh/bulb.png" style="width:100px; height:50px;">
              <h2>NOTA</h2>
            </div>
            <div class="box2">
              <input type="radio" name="gridRadios" class="big" id="gridRadios1" value="1">
              <input type="radio" name="gridRadios" class="big" id="gridRadios2" value="2">
              <input type="radio" name="gridRadios" class="big" id="gridRadios3" value="3">
              <input type="radio" name="gridRadios" class="big" id="gridRadios4" value="4">

            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="bottom">
    .
  </div>

</body>

</html>