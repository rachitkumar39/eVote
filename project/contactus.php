php<!DOCTYPE html>
<html>
    <head>
        <title>e-vote</title>
       <link rel="stylesheet" href="css/contactus.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <!-- <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css"> -->
       <link rel="icon" href="img/logo/logo vote now.png">
        
    </head>
    <body>
        <header class="sticky1">
            <nav class="navbar background">
                <ul class="nav-list">
                    <div class="logo">
                        <img src="img/logo/flower white removed.png" alt="logo">
                    </div>
                   <li> <a href="index.php">Home</a></li> 
                   <li><a href="index.php#Service">News</a></li> 
                    <li><a href="index.php#Service">Services</a></li> 
                    <li><a href="index.php#About Us">About Us</a></li> 
                    <li><a href="contactus.php">Contact Us</a></li> 
                </ul>
            </nav>
        </header>
        <div class="thirdsec">
            <div class="contactus">
                <div class="letsgetintouch">
                    <div class="letsgetintouch1">
                        <h3>Let's get in touch</h3>
                    <p class="letsgetintouchpara">We're open for any suggestion or just to have a chat</p>
                    </div>
                    <div class="add_of_contactus">
                        <div class="icon_add_of_contactus">
                            <span class="fa add_icon"></span>
                        </div>
                        <div class="address_add_of_contactus">
                            <p>Adress: Ajay Kumar Garg Engineering College,Ghaziabaad U.P</p>
                        </div>
                    </div>
                    <div class="phoneno_of_contactus">
                        <div class="block_icon_of_phoneno_of_contactus">
                            <span class="fas icon_of_phoneno_of_contactus"></span>
                        </div>
                        <div class="text_of_phoneno_of_contactus">
                            <p>Phone: </p>
                            <a style="color:white" href="tel://7983704577">+91-7983704577,</a>
                            <a style="color:white" href="tel://8279745360">8392878517</a>
                        </div>
                    </div>
                    <div class="email_of_contactus">
                        <div class="block_icon_of_email_of_contactus">
                            <span class="fas icon_of_email_of_contactus">
                            </span>
                        </div>
                        <div class="text_of_email_of_contactus">
                            Email: 
                            <a style="color:white" href="mailto://rachitrajputsisodia@gmail.com">rachitrajputsisodia@gmail.com</a>
                            <a style="color:white" href="mailto://tejasvi2014005@akgec.ac.in">tejasvi2014005@akgec.ac.in</a>
                            <a style="color:white" href="mailto://rachit2014008@akgec.ac.in">rachit2014008@akgec.ac.in</a>
                        </div>
                    </div>
                </div>
                <div class="get_in_touch">
                    <div class="text_of_get_in_touch">
                        <h1>Get in touch</h1>
                    </div>
                    <div class="form_of_contactus">
                        <form action="contact_us.php" method="post">
                            <div class="name_of_contactform">
                                <span class="firstname">
                                    First Name: <input type="text"  class="border-design1 " name="firstname" id="firstname" placeholder="First Name" required>
                                </span>
                                <span class="lastname">
                                    Last Name: <input type="text" class="border-design1" name="lastname" id="lastname" placeholder="Last Name" required>
                                </span>
                            </div>
                            <br>
                            <div class="email_of_contactform a">
                                <!-- <span class="email"> -->
                                    Email: <input type="text" class="border-design" name="email" id="email" placeholder="Email" required>
                                <!-- </span> -->
                            </div>
                            <br>
                            <div class="subject_of_contactform a">
                                Subject: <input type="text" class="border-design" name="subject" id="subject" placeholder="Subject">
                            </div>
                           <br>
                            <div class="message_of_contactform a">
                                <label>Message: </label>
                                <textarea name="message" class="border-design_contactus" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                            <br>
                            <button class="submit_of_contactus">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>