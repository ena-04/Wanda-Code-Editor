<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  
    <script src="https://kit.fontawesome.com/ef8dd7aac0.js" crossorigin="anonymous"></script> 

</head>
<body>

    <section class="header">

        <!-- <div> -->
            <a href="final (dark mode).html"><img src="logo.jpg" class="logo" height="60px" width="60px"></a>
            <span class="team_name">Web Waltzers</span>
            <span class="team_description">~Coding made Easy</span>
            <span class="project_name">{ONLINE CODE EDITOR}</span>
            
            

    <!-- </div> -->
</section>

    <section class="contact">  
        <div class="content">  
            <h2>Contact Us</h2>  
              <p>Welcome, Coders!
              </p>
            
                <?php 

                       $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        

                ?>

        </div> 
    
        <div class="container"> 
            <div class="contactInfo">  
                <div class="box">   
                    <div class="icon"><i class="fas fa-star-half-alt"></i></div>
                        <div class="text">
                            <h2>Nayonika Chakraborty</h2>  
                            <div class="parent">  
                                <div class="Number">Contact No. : 9569720268</div>  
                                <div class="options">
                                    <div class="items"><a href = "mailto:nayonikachakraborty11@gmail.com">Email</a></div>
                                    <div class="items"><a href="https://www.linkedin.com/in/nayonika-chakraborty-7ba943212">LinkedIn</a></div>
                                    <div class="items"><a href="https://github.com/NayonikaChakraborty">GitHub</a></div>
                                </div>

                            </div>
                        </div>
                    
                </div> 
                <div class="box">   
                    <div class="icon"><i class="fas fa-star-half-alt"></i></div>
                        <div class="text">
                            <h2>Susmita Singh</h2>  
                            <div class="parent">  
                                <div class="Number">Contact No. : 9907508244</div>  
                                <div class="options">
                                    <div class="items"><a href ="mailto:susmita2001singh@gmail.com">Email</a></div>
                                    <div class="items"><a href="https://www.linkedin.com/in/susmitasingh/">LinkedIn</a></div>
                                    <div class="items"><a href="https://github.com/Susmita2105">GitHub</a></div>
                                </div>

                            </div>
                        </div>
                    
                </div>  
                <div class="box">   
                    <div class="icon"><i class="fas fa-star-half-alt"></i></div>
                        <div class="text">
                            <h2>Enakkhi Saha</h2>  
                            <div>  
                                <div class="Number" >Contact No. : 8585092001</div>  
                                <div class="options">
                                    <div class="items"><a href = "mailto:sahaenakkhi@gmail.com">Email</a></div>
                                    <div class="items"><a href="https://www.linkedin.com/in/enakkhi-saha-003063225">LinkedIn</a></div>
                                    <div class="items"><a href="https://github.com/ena-04">GitHub</a></div>
                                </div>

                            </div>
                        </div>
                    
                </div> 
                <div class="box">   
                    <div class="icon"><i class="fas fa-star-half-alt"></i></div>
                        <div class="text">
                            <h2>Ankita Barua</h2>  
                            <div class="parent">  
                                <div class="Number">Contact No. : 9432504503</div>  
                                <div class="options">
                                    <div class="items"><a href = "mailto:baruaankita2002@gmail.com">Email</a></div>
                                    <div class="items"><a href="https://www.linkedin.com/in/ankita-barua-419946212">LinkedIn</a></div>
                                    <div class="items"><a href="https://github.com/CodexAnne">GitHub</a></div>
                                </div>

                            </div>
                        </div>
                    
                </div>   
            </div>  
            <div class="contactForm">  
                <form action="process.php" method="post">
                    <h2>Send Message</h2>  
                    <div class="inputBox">
                        <input type="text" name="UName" required="required">  
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" required="required">  
                        <span>Email Id</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="msg" required="required"></textarea> 
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input name="btn-submit" type="submit" name="" value="Send">  
                        <span></span>
                    </div>
                </form>

            </div>
        </div>

    </section> 

    <div class="footer">
        <a class="footer-links" href="about-us.html">About us</a>
        <a class="footer-links" href="contact.html">Contact us</a>
        <a class="footer-links github-logo" href="https://github.com/Susmita2105/Wanda-Code-Editor"><i class="fab fa-github"></i></a>
        <p class="copyright">© Web Waltzers 2022</p>
    </div>

</body>
</html>
