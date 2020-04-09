<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lipscomb Call for Papers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<head>
  <meta charset="utf-8">
  <title>LINEUP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/must.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/raphael-min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/SENG5.js"></script>

  <script type="text/javascript">
      function userCheck(){
        var userType="<?php echo $_SESSION['TYPE']; ?>";
        userType = parseInt(userType);
        if(userType == 5){
          showAdmin();
        }
        if(userType == 2){
          showReview();
        }
      }

  </script>
</head>


<body onload="userCheck()">
  <div id="wrapper">
    <header>
      <?php
        if(isset($_GET['uploadsuccess'])){
          if($_GET['uploadsuccess']== 'true'){
            echo'<div id="errorDiv"><span>Uploaded Successfully</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
          }else{
            echo'<div id="errorDivF"><span>There Was An ERROR Uploading</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
          }
        }
       ?>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="main.php"><img src="assets/img/Lineup.png" alt="" /></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li>
                    <a href="main.php"><i class="icon-home"></i> Home </a>
                  </li>
                  <li>
                    <a href="timeSelection.php""><i class="icon-calendar"></i> Appointments</a>
                  </li>
                  <li>
                    <a href="servicesAndProducts.php"><i class="icon-cut"></i> Services & Products</a>
                  </li>
                  <li class="active">
                    <a href="contact.php"><i class="icon-tag"></i> The Store</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-trophy"></i> Rewards</a>
                  </li>
                  <li class="dropdown" id="adminMenu">
                    <a href="#"><i class="icon-book"></i>Admin Menu<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="barberview.php">Barber View</a></li>
                      <li><a href="#">Admin Page</a></li>
                      <li><a href="#">Admins only cool club</a></li>
                      <li><a href="#">Admin Store</a></li>
                    </ul>
                  </li>
                  <li class="dropdown" id="reviewMenu">
                    <a href="#"><i class="icon-book"></i>Reviewer Menu<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="revieweSubs.php">Review Submissions</a></li>

                    </ul>
                  </li>
                  <li>
                    <?php
                      if(isset($_SESSION['USERID'])){
                        echo '<a href="main.php?logout=true" onclick="LogOut()"><i class="icon-lock"></i> Logout </a>';
                      }else{
                        echo '<a href="index.php"><i class="icon-key"></i> Login </a>';
                      }
                    ?>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>
    <!-- Subintro
================================================== -->
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">Get in touch with us<span></span></h4>
                <ul>
                  <li><label><strong>Phone : </strong></label>
                    <p>
                      (615) 966-5082 ext. 5082
                    </p>
                  </li>
                  <li><label><strong>Email : </strong></label>
                    <p>
                      lineupbarbershoppe@gmail.com
                    </p>
                  </li>
                  <li><label><strong>Address : </strong></label>
                    <p>
                      420 Lineup Ln.<br>
					  Nashville, TN 37204
                    </p>
                  </li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Find us on social networks<span></span></h4>
                <ul class="social-links">
                  <li><a href="#" title="Twitter"><i class="icon-square icon-32 icon-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="icon-square icon-32 icon-facebook"></i></a></li>
                  <li><a href="#" title="Google plus"><i class="icon-square icon-32 icon-google-plus"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="icon-square icon-32 icon-linkedin"></i></a></li>
                  <li><a href="#" title="Pinterest"><i class="icon-square icon-32 icon-pinterest"></i></a></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="span8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12894.200558076225!2d-86.80216023514313!3d36.10445276118799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a732296d8189b03!2sJoe&#39;s%20Barber%20Shop!5e0!3m2!1sen!2sus!4v1585678655638!5m2!1sen!2sus" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="spacer30">
            </div>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="mail.php" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
<!--FORM STARTS HERE--!>
                <div class="span4 form-group">
                  <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" class="input-block-level" name="subject" id="subject" placeholder="Subject" data-rule="required" data-msg="Please enter a subject" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea class="input-block-level" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit">Send a message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
       <div class="container">
         <div class="row">
           <div class="span4">
             <div class="widget">
               <h5>How to find us</h5>
               <address>
         <i class="icon-home"></i> <strong>Lineup Barbershop</strong><br>
         420 Lineup Ln.<br>
         Nashville, TN 37204
         </address>
               <p>
                 <i class="icon-phone"></i> (615) 966-5082 ext. 5082<br>
                 <i class="icon-envelope-alt"></i> freshcutz@lineup.com
               </p>
             </div>
             <div class="widget">
               <ul class="social">
                 <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                 <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                 <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                 <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                 <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="verybottom">
         <div class="container">
           <div class="row">
             <div class="span6">
               <p>
                 &copy; LINEUP - All right reserved
               </p>
             </div>
             <div class="span6">
               <div class="pull-right">
                 <div class="credits">
                   <!--
                     All the links in the footer should remain intact.
                     You can delete the links only if you purchased the pro version.
                     Licensing information: https://bootstrapmade.com/license/
                     Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                   -->
                   Created by the best group in SENG
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </footer>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/raphael-min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
