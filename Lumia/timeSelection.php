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
        if(userType == 5){
          showAdmin();
        }
        if(userType == 2){
          showReview();
        }
      }

  </script>
</head>


<body onload="userCheck();">
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
                  <li class="active"><!-- TODO: Make a Events Paige -->
                    <a href="timeSelection.php"><i class="icon-calendar"></i> Appointments</a>
                  </li>
                  <li><!-- TODO: Make a Products Paige -->
                    <a href="#"><i class="icon-cut"></i> Services</a>
                  </li>
                  <li>
                    <a href="contact.php"><i class="icon-tag"></i> The Store</a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-trophy"></i> Rewards</a>
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
    <br><br><br>
    <section id="maincontent">
      <div class="apptContainer">
        <div class="leftFloat">
        <form id="apptform" action="testRun.php">
          <h5>Let's get you looking fresh</h5>
        <label for="barbers">Choose a Barber:</label>
		<select id="barbers">
  		<option value="paige">Paige</option>
  			<option value="eddie">Eddie</option>
  			<option value="zachw">Zach W</option>
  			<option value="zachj">Zach J</option>
		</select>
		<br>

		<label for="barbers">Choose a Date:</label>
		<input type="date" id="apptDate" name="apptDate">

		<label for="barbers">Choose a Time:</label>
		<select id="times">
  		  <option value="9:00 AM">9:00 AM</option>
  			<option value="9:30 AM">9:30 AM</option>
  			<option value="10:00 PM">10:00 PM</option>
        <option value="10:30 PM">10:30 PM</option>
  			<option value="11:00 PM">11:00 PM</option>
  			<option value="11:30 PM">11:30 PM</option>
        <option value="12:00 PM">12:00 PM</option>
  			<option value="12:30 PM">12:30 PM</option>
  			<option value="1:00 PM">1:00 PM</option>
  			<option value="1:30 PM">1:30 PM</option>
  			<option value="2:00 PM">2:00 PM</option>
  			<option value="2:30 PM">2:30 PM</option>
  			<option value="3:00 PM">3:00 PM</option>
  			<option value="3:30 PM">3:30 PM</option>
        <option value="4:00 PM">4:00 PM</option>
  			<option value="4:30 PM">4:30 PM</option>
  			<option value="5:00 PM">5:00 PM</option>
		</select>


		<div id=“container” class="serviceBox">
    <label for="barbers">Select Services:</label>
		<div style=“float: left;vertical-align:middle;” ><input type="checkbox" id="Haircut" name="Haircut" style="vertical-align:text-bottom;"> Haircut </div>
		<div style=“float: left”><input type="checkbox" id="Beard Trim" name="Beard Trim"> Beard Trim </div>
		<div style=“float: left”><input type="checkbox" id="Shave" name="Shave"> Straight Razor Shave </div>
		<div style=“float: none”><input type="checkbox" id="Line Up" name="Line Up"> Line Up </div>
		</div>
    <button type="submit" form="apptform" value="Submit">Book My Appointment</button>
		</form>
  </div>
        <div class="rightFloat">

          <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FChicago&amp;src=bGluZXVwYmFyYmVyc2hvcHBlQGdtYWlsLmNvbQ&amp;src=ajVvYjNsZWFubDhqbm04ZWJxYzUxam11NW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%23C0CA33&amp;color=%2333B679&amp;color=%230B8043&amp;mode=WEEK" style="float:right" width="90%" height="100%" frameborder="0" scrolling="no"></iframe>

        </div>
      </div>
      <br><br><br>
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
