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
        if(userType == 2){
          showAdmin();
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
            echo'<div id="errorDiv"><span>Booking Successfull</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
          }else{
            echo'<div id="errorDivF"><span>There Was An ERROR booking your appointment</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
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
                  <li class="active">
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
    <br><br><br>
    <section id="maincontent">
      <div class="apptContainer">
        <div class="leftFloat">
        <form id="apptform" action="testRun.php" method="post">
          <h5>Let's get you looking fresh</h5>
        <label for="barbers">Choose a Barber:</label>
		<select id="barbers" name="barbers">
  		<option value="j5ob3leanl8jnm8ebqc51jmu5o@group.calendar.google.com">Paige</option>
  			<option value="kfnu8qmekslda8jv0ld84i4tf0@group.calendar.google.com">Eddie</option>
  			<option value="d3b9bvvicldekskei61vqppbns@group.calendar.google.com">Zach W</option>
		</select>
		<br>

		<label for="barbers">Choose a Date:</label>
		<input type="date" id="apptDate" name="apptDate" required>

		<label for="barbers">Choose a Time:</label>
		<select id="times" name="time">
  		  <option value="9:00">9:00 AM</option>
  			<option value="9:30">9:30 AM</option>
  			<option value="10:00">10:00 AM</option>
        <option value="10:30">10:30 AM</option>
  			<option value="11:00">11:00 AM</option>
  			<option value="11:30">11:30 AM</option>
        <option value="12:00">12:00 PM</option>
  			<option value="12:30">12:30 PM</option>
  			<option value="13:00">1:00 PM</option>
  			<option value="13:30">1:30 PM</option>
  			<option value="14:00">2:00 PM</option>
  			<option value="14:30">2:30 PM</option>
  			<option value="15:00">3:00 PM</option>
  			<option value="15:30">3:30 PM</option>
        <option value="16:00">4:00 PM</option>
  			<option value="16:30">4:30 PM</option>
  			<option value="17:00">5:00 PM</option>
		</select>
		<br>

		<div id=“container” class="serviceBox">
    <label for="barbers">Select Services:</label>
		<div style=“float: left;vertical-align:middle;” ><input type="checkbox" id="Haircut" name="service[]" value="Haircut" style="vertical-align:text-bottom;"> Haircut </div>
		<div style=“float: left”><input type="checkbox" id="Beard Trim" name="service[]" value="Beard Trim"> Beard Trim </div>
		<div style=“float: left”><input type="checkbox" id="Shave" name="service[]" value="Straight Razor Shave"> Straight Razor Shave </div>
		<div style=“float: none”><input type="checkbox" id="Line Up" name="service[]" value="Line Up"> Line Up </div>
		</div>
		<br>

		  <label for="special">Special Instructions:</label>
		  <textarea name="special" rows="5" cols="15"></textarea>

    <button type="submit" class="btn btn-theme" form="apptform" value="Submit">Book My Appointment</button>
		</form>
  </div>
        <div class="rightFloat">

          <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FChicago&amp;src=a2ZudThxbWVrc2xkYThqdjBsZDg0aTR0ZjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ajVvYjNsZWFubDhqbm04ZWJxYzUxam11NW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZDNiOWJ2dmljbGRla3NrZWk2MXZxcHBibnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23333333&amp;color=%2329527A&amp;color=%23060D5E&amp;mode=WEEK&amp;title=Full%20Shop%20Schedule&amp;showPrint=0" style="float:right; position:absolute; z-index: 0;" width="90%" height="100%" frameborder="0" scrolling="no"></iframe>

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
