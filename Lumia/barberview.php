<?php
session_start();
?>
<!DOCTYPE html>
<html>
  
<head>

   <title>Login</title>
      <link rel="shortcut icon" href="assets/ico/must.ico">
      <link href="assets/css/bootstrap.css" rel="stylesheet">
      <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
      <link href="assets/css/prettyPhoto.css" rel="stylesheet">
      <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
      <link href="assets/css/flexslider.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/color/default.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">


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

<style>



form{
  text-align: center;
}
select{
  text-align: center;
  text-align-last: center;
}
button{
  text-align: center;
}
.custom-select{
  position: relative
  display: block
  max-width: 400px
  min-width: 180px
  margin: 0 auto
  border: 1px solid #3C1C78
  background-color: #16013E
  z-index: 10
 
}
.button {
   border-top: 1px solid #2d414d;
   background: #3b505e;
   background: -webkit-gradient(linear, left top, left bottom, from(#353e6b), to(#3b505e));
   background: -webkit-linear-gradient(top, #353e6b, #3b505e);
   background: -moz-linear-gradient(top, #353e6b, #3b505e);
   background: -ms-linear-gradient(top, #353e6b, #3b505e);
   background: -o-linear-gradient(top, #353e6b, #3b505e);
   padding: 6px 12px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 16px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #243440;
   background: #243440;
   color: #ccc;
   }
.button:active {
   border-top-color: #000000;
   background: #000000;
    }

.select{
  border: 
}


}

</style>

<body onload="userCheck()">
<header>
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
<br>
<br>
<br>
<?php 
echo $_SESSION['USERID'];
if($_SESSION['USERID'] == "2")
  echo '<div margin-left="center"><iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FChicago&amp;src=ajVvYjNsZWFubDhqbm04ZWJxYzUxam11NW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23C0CA33&amp;showTitle=0&amp;mode=WEEK&amp;showPrint=0" style="position:relative;left:18%;" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>';
  
elseif($_SESSION['USERID'] == "5")
  echo '<div text-align="center"><iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FChicago&amp;src=a2ZudThxbWVrc2xkYThqdjBsZDg0aTR0ZjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23F4511E&amp;showTitle=0&amp;showPrint=0&amp;mode=WEEK" style="position:relative;left:18%;" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>';

elseif($_SESSION['USERID'] == "6")
  echo '<div text-align="center"><iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FChicago&amp;src=ZDNiOWJ2dmljbGRla3NrZWk2MXZxcHBibnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23AD1457&amp;showPrint=0&amp;mode=WEEK" style="position:relative;left:18%;" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>';

 ?>


<br>
<br>
<br>
    
   
  
</body>


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
</html>