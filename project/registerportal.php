<!DOCTYPE html>
<html>
    <head>
        <title>register portal</title>
        <link rel="icon" href="img/logo/logo vote now.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">   
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/registerportal.css">
        <link rel="stylesheet" href="css/registerportal1.css">

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
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img class="logo" src="img/logo/flower white removed.png">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            <form id="LoginForm" action="login1.php" method="post">
                                <input type="text" name="username" placeholder="Username" required>
                                <input type="password" name=
                                "password" placeholder="Password" required>
                                <button type="submit" class="btn" >Login</button><br>
                                <a href="">Forgot Password</a>
                                <h6>
                                <?php
                                echo @$_GET['incorrect'];
                                ?>
                                </h6>
                            </form>
                            <form id="RegForm" action="register.php" method="post">
                                <input type="text" name="username" id="username" placeholder="Username" required>
                                <input type="text" name="name" id="name" placeholder="Name" required>
                                <input type="tel" name="mobile_no" id="phone"  minlength="10" maxlength="10" placeholder="1234567890" required>
                                <input type="text" name="aadhar_card" id="adhar_card" minlength="12" maxlength="12" placeholder="1234-1234-1234" required>   
                                <input type="password" name="password" id="password" placeholder="Password" required>
                                <button type="submit" class="btn">Register</button>
                            </form>
                            <script>
                                var LoginForm = document.getElementById("LoginForm");
                                var RegForm = document.getElementById("RegForm");
                                var Indicator = document.getElementById("Indicator");
                                function register(){
                                    RegForm.style.transform = "translateX(0px)";
                                    LoginForm.style.transform = "translateX(0px)";
                                    Indicator.style.transform = "translateX(100px)";
                                }
                                function login(){
                                    RegForm.style.transform = "translateX(300px)";
                                    LoginForm.style.transform = "translateX(300px)";
                                    Indicator.style.transform = "translateX(0px)";
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <nav class="footer-nav">
            </nav>
        </div>
    </body>
</html>