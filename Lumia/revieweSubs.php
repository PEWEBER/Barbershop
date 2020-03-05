<?php
  session_start();
  if(isset($_SESSION['USERID']) == false || $_SESSION['TYPE'] != '2')
  {
    header("Location: index.php");
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

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>


<body>

  <body>
    <div id="wrapper">
      <header>
        <?php
          if(isset($_GET['success'])){
            if($_GET['success']== 'true'){
              echo'<div id="errorDiv"><span>Updated Successfully</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
            }else{
              echo'<div id="errorDivF"><span>There Was An ERROR</span><span id="dismiss" onclick="dismiss(this.parentNode.id)">x</span></div>';
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
                    <li><a href="blog-left-sidebar.html">Submissions Archive</a></li>
                    <li><a href="blog-right-sidebar.html">Admin Page</a></li>
                    <li><a href="post-left-sidebar.html">Admins only cool club</a></li>
                    <li><a href="post-right-sidebar.html">Admin Store</a></li>
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

      <section id="maincontent">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h4 class="rheading">Submissions for Review<span></span></h4>
              <br><br>
              <div class="row">
                <table>
                  <tr>
                    <th>Presentor</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th></th>
                    <th>Download</th>
                  </tr>
                  <?php
                  $db = new mysqli('68.178.217.43', 'paigeweber', 'Bison51#', 'paigeweber');
                  if(mysqli_connect_errno())
                    {
                        echo 'Connection to database failed:'.mysqli_connect_error();
                        exit();
                    }

                  $query = "SELECT * FROM Papers WHERE ReviewerID =" . $_SESSION['USERID'];
                      $result = $db-> query($query);
                      if($result -> num_rows > 0)
                      {
                          while ($row = $result->fetch_assoc()) {
                              $field1name = $row["Title"];
                              $field2name = $row["Author"];
                              $field3name = $row["Paper"];
                              $field4name = $row["ReviewerID"];
                              $field5name = $row["UserID"];
                              $field6name = $row["PaperID"];

                              $pQuery = "SELECT * FROM User WHERE UserID = " . $field5name;
                              $presentor = $db-> query($pQuery);
                              $presentor = $presentor->fetch_assoc();
                              $pLNAME = $presentor["Lname"];
                              $pFNAME = $presentor["Fname"];
                              $eMail = $presentor['eMail'];

                              if($field4name != ""){
                                $rQuery = "SELECT * FROM User WHERE UserID = " . $field4name;
                                $reviewer = $db-> query($rQuery);
                                $reviewer = $reviewer->fetch_assoc();
                                $rLNAME = $reviewer["Lname"];
                                $rFNAME = $reviewer["Fname"];

                              }
                              echo '<tr>
                              <td>'.$pLNAME.', '.$pFNAME.'</td>
                              <td>'.$field1name.'</td>
                              <td>'.$eMail.'</td>';

                              echo'<td id="status">Pending</td><td id="buttonTD"><button type="button" id="'.$field6name.'" class="accept" onclick="changeStatus(this.id, this.className)">Accept</button></td>';

                              echo'
                              <td>'.'<a href='.'download.php?nama='.$field3name.'>Download</a></td>

                              </tr>';
                              //<td><a href="deletePaper.php?PaperID=' . $field6name . '">x</a></td>
                            }
                        }

                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div id="reviewForm">
          <form action="assignReviewer.php" method="post">
            <h3>Select a Reviewer</h3>
            <select name="rID">
              <option value="0" selected>--Select Reviewer--</option>
              <?php
                $queryR = "SELECT * FROM User WHERE Type=2";
                $result2 = $db-> query($queryR);
                if($result2 -> num_rows > 0)
                {
                    while ($row = $result2->fetch_assoc()) {
                      $UID = $row['UserID'];
                      $rName = $row['Lname'] . ", " . $row['Fname'];
                      echo '<option value="'.$UID.'">'.$rName.'</option>';
                    }
                }
               ?>
            </select>
            <span id="buttons">
            <input type="submit" value="Update" onclick="loadCir()">
            <input type="button" value="Cancel" onclick="hideForm()">
            <input id="prsntID" type="radio" name="pID" value="0" checked="checked">
          </span>
          <div class="loader" id="loadCir"></div>
          </form>
        </div>
      </section>
      <br><br><br><br><br>
      <!-- Footer
 ================================================== -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5>Interesting pages</h5>
              <ul class="regular">
                <li><a href="#">About our company</a></li>
                <li><a href="#">How we do all stuff</a></li>
                <li><a href="#">Our recent works</a></li>
                <li><a href="#">Press releases</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>

          <div class="span4">
            <div class="widget">
              <h5>How to find us</h5>
              <address>
								<i class="icon-home"></i> <strong>Lipscomb University</strong><br>
								X104 Awesome ville, Suite AB12<br>
								Jakarta 12420 Indonesia
								</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-8890<br>
                <i class="icon-envelope-alt"></i> email@domainname.com
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

  </body>

</html>
