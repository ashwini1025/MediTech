
<?php
session_start();
$id =$_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
   <!--header start-->
   <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WELCOME TO PATIENTS  PORTAL </b></a>
        <!--logo end-->
      <?php $timestamp = time();  echo "\n";  echo(date("F d, Y h:i:s A", $timestamp));  ?>
        <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php"><?php echo " Name :".$_SESSION['user']."" ?>Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            
        
                   
             <li class="sub-menu">
                 <a href="pat_records.php">
              <i class="fa fa-user-circle"></i>
              <span>Patient  Profile  </span>
              </a>
         </li>
         
         <li class="sub-menu">
                 <a href="consent_mang.php">
              <i class="fa fa-user-circle"></i>
              <span>Consent  Management Form   </span>
              </a>
         </li>
         
          <li class="sub-menu">
              <a href="bookapt.php">
              <i class="fa fa-connectdevelop"></i>
              <span>Book  Appointment </span>
              </a>
         </li>
          
          <li class="sub-menu">
              <a href="ai.php">
              <i class="fa fa-android"></i>
              <span>AI Disease prediction   </span>
              </a>
          </li> 
          
              <li class="sub-menu">
                              <a href="diagnose.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Diabetic Risk TEST   </span>
                            </a>
                        </li> 
           
          <li class="sub-menu">
            <a href="about.php">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
            </a>
          </li>
          
          
           
           <li class="sub-menu">
            <a href="about.php">
              <i class="fa fa-bell-o"></i>
              <span> About us  </span>
            </a>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
      <section id="main-content">
      <section class="wrapper">
        <h1><i class="fa fa-book"></i> Consent  Form</h1>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Consent Form</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

             
              <center><button type="button" class="btn btn-primary btn-lg"> I Agree</button>
              <button type="button" class="btn btn-primary btn-lg">Disagree </button></center>
             

            </form>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="title">Consent management </h2>
             <p> By clicking on "Agree" button, you are permitting the health care provider to share your health records for any purpose under any circumstances
                    Meditech assures you that your Personal Health information (PHI) is secure and safe. 
                    
                   
                </p>
              <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i>meditech@ehealth.com</li>
              <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
              <li><i class="fa fa-home"></i> Kingstone villa, Ottawa.</li>
            </ul>
            
            <!-- contact_details -->
          </div>
        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>MediTech</strong>. All Rights Reserved
        </p>
        <div class="credits">
        
          A healthcare portal for best <a href="">Medical support </a>
          
        </div>
        <a href="chat_room.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
