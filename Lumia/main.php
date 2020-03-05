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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/lipscomb.ico">
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
              <a href="main.php"><img src="assets/img/lipscomb-logo.png" alt="" /></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="active">
                    <a href="main.php"><i class="icon-home"></i> Home </a>
                  </li>
                  <li><!-- TODO: Make a Events Paige -->
                    <a href="#"><i class="icon-calendar"></i> Events</a>
                  </li>
                  <li><!-- TODO: Make a Sponsors Paige -->
                    <a href="#"><i class="icon-money"></i> Sponsors</a>
                  </li>
                  <li>
                    <a href="submit.php"><i class="icon-pencil"></i> Submissions</a>
                  </li>
				  <li>
                    <a href="contact.php"><i class="icon-envelope-alt"></i> Contact</a>
                  </li>
                  <li class="dropdown" id="adminMenu">
                    <a href="#"><i class="icon-book"></i>Admin Menu<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="archive.php">Submissions Archive</a></li>
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
    <section id="intro">

      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                  <img src="assets/img/conference.jpg" alt="" />
                  <div class="flex-caption primary">
                    <h2>Academic Frontlines</h2>
                    <p>We lead the area in papers published into scientific journals</p>
                  </div>
                </li>
                <li data-thumb="assets/img/sponsors.jpg">
                  <img src="assets/img/sponsors.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Join our team of Sponsors!</h2>
                    <p>Join at the Bronze, Silver, or Gold level!</p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                  <img src="assets/img/staff.jpg" alt="" />
                  <div class="flex-caption success">
                    <h2>Nations leading Speakers</h2>
                    <p>Dont they look happy? Do you want to be happy too?</p>
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
                <h2>Become part of the future</h2>
                <p>
                  We are now accepting papers for all events. Submit yours today.
                </p>
              </div>
              <div class="cta">
                <a class="btn btn-large btn-theme" href="submit.php">
							<i class="icon-edit icon-white"></i> Submit </a>
              </div>

            </div>
            <!-- end tagline -->
          </div>
        </div>


        <div class="row">
          <h4 class="rheading" style="left:20px;"> Top rated Submissions </h4>
          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img1.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                <h4>Recruiting <br />Creatives</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img2.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                <h4>Professional <br />Social Media</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img3.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                <h4>Software Dev<br />in 2025</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img4.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-trophy icon"></i></a>
                <h4>Future of Game Dev in academia</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <h4 class="rheading">Upcoming Events<span></span></h4>
            <div class="row">
              <div class="span3">

                <p class="hidden-phone">
                  This month includes presentations from disguished speakers Chris Simmons and Alfa Nyandoro on everything from soda powered scooters to the price of rice in china.
                </p>

                <a href="#" class="btn btn-theme">Full Calendar</a>
              </div>

              <div class="span9">
                <div id="latest-work" class="carousel btleft">
                  <div class="carousel-wrapper">
                    <ul class="da-thumbs">

                      <li>
                        <img src="assets/img/dummies/work1.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-eye-open icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-calendar icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Tablet Computing Seminar</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work2.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-eye-open icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-calendar icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>UI Color Schemes and the Human Brain</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work3.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-eye-open icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-calendar icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Secure Geocaching</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work4.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Mobile template</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work5.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Business theme</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work6.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="#">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Portfolio graphic</p>
                          </div>
                        </article>
                      </li>

                    </ul>
                  </div>
                </div>

              </div>
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
				<i class="icon-home"></i> <strong>Lipscomb University</strong><br>
				One University Park Drive<br>
				Nashville, TN 37204
				</address>
              <p>
                <i class="icon-phone"></i> (615) 966-5082 ext. 5082<br>
                <i class="icon-envelope-alt"></i> chris.simmons@mail.lipscomb.edu
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
                &copy; Lipscomb - All right reserved
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
