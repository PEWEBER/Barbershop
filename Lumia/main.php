<?php
    session_start();

    function LogOut(){
          unset($_SESSION['USERID']);
          unset($_SESSION['TYPE']);
          session_destroy();
    }

    if (isset($_GET['logout'])) {
    LogOut();
  }
?>
<!DOCTYPE html>
<html lang="en">

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
        console.log(userType);
        if(userType == 2){
          showAdmin();
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
                  <li class="active">
                    <a href="main.php"><i class="icon-home"></i> Home </a>
                  </li>
                  <li>
                    <a href="timeSelection.php""><i class="icon-calendar"></i> Appointments</a>
                  </li>
                  <li>
                    <a href="servicesAndProducts.php"><i class="icon-cut"></i> Services & Products</a>
                  </li>
                  <li>
                    <a href="contact.php"><i class="icon-tag"></i> Contact Us</a>
                  </li>
                  <li>
                    <a href="rewards.php"><i class="icon-trophy"></i> Rewards</a>
                  </li>
                  <li id="adminMenu">
                    <a href="barberview.php"><i class="icon-book"></i>View My Schedule</a>
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
    <section id="intro">

      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                  <img src="assets/img/barber.jpg" alt="" />
                  <div class="flex-caption primary">
                    <h2>Professional Touch</h2>
                    <p>Meet our team of talented staff</p>
                  </div>
                </li>
                <li data-thumb="assets/img/sponsors.jpg">
                  <img src="assets/img/products.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Top qualtity products!</h2>
                    <p>Browse our stock in the store!</p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                  <img src="assets/img/styles.jpeg" alt="" />
                  <div class="flex-caption success">
                    <h2>A style for everyone</h2>
                    <p>Find the one that fits you!</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="maincontent">
      <div class="container">

        <div class="row">
          <div class="span12">
            <div class="call-action">

              <div class="text">
                <h2>Get started by setting up an appointment today</h2>
                <p>
                  Freshen up your look on your schedule.
                </p>
              </div>
              <div class="cta">
                <a class="btn btn-large btn-theme" href="timeSelection.php">
							<i class="icon-calendar icon-white"></i> Book a cut </a>
              </div>

            </div>
            <!-- end tagline -->
          </div>
        </div>




      </div>
    </section>
    <section id="events">
    <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                  <img src="assets/img/bbq1.jpg" alt="" />
                  <div class="flex-caption primary">
                    <h2>Events</h2>
                    <p>Come meet our barbers at our annual BBQ event!</p>
                  </div>
                </li>
                <li data-thumb="assets/img/sponsors.jpg">
                  <img src="assets/img/bbq2.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Regular Events</h2>
                    <p>We want to get to know each of our customers.</p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                  <img src="assets/img/bbq3.jpg" alt="" />
                  <div class="flex-caption success">
                    <h2>A style for everyone</h2>
                    <p>Find the one that fits you!</p>
                  </div>
                </li>
              </ul>
            </div>
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



</body>
</html>
