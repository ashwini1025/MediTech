
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

  
  <!--  Scripting logicss -->
  <style>
      
      
      
  </style>
  
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
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WELCOME TO DOCTORS PORTAL </b></a>
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
            <a href="chat_p.php">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
            </a>
          </li>
          
          
           
           <li class="sub-menu">
            <a href="about.php">
              <i class="fa fa-bell-o"></i>
              <span> About us   </span>
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
        <h3><i class="fa fa-asterisk-"></i>Lets Get started with BMI calculator</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-6">
            <div class="form-panel">
                
           
               <div class="form-group">
                  <label class="control-label col-md-6"> Weight in (KG)  </label>
                  <div class="col-md-3 col-lg-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text"  id="weight">
             </div>
               
            </div>
            
            <div class="form-group">
                  <label class="control-label col-md-6"> Height in cm </label>
                  <div class="col-md-3 col-lg-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text"  id="height">
                   <center><br><input type ="submit"  class="btn btn-primary btn-group-sm"   onclick="computeBMI();" value="Calculate BMI">   </center>
                <br> </center>
                  </div>
                   <br>
                
                  <center>
                      <br><br>  
                      <h1> <br> <br>Your BMI is: <span id="output">  ?    </span></h1>
                        <h2>This means you are: <span id="comment"> ?   </span> </h2>
                  </center>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
          <div <div class="col-lg-6"> <img src="BMI.png"  width="510dp" height="310dp"></div>
        </div>
        
        
        
        <div class="row mt">
         
          <div class="col-lg-12">
            <div class="form-panel">
                <form action="" method="POST" class="form-horizontal style-form" > 
                    <h3>  Normal BMI important .. </h3>
           
                    <h4><p>In general, the higher your BMI, the higher the risk of developing a range of conditions linked with excess weight, including:</p>
-Diabetes<br>
-Arthritis<br>
-Liver disease<br>
-Several types of cancer <br>
-High blood pressure (hypertension)<br>
-High cholesterol<br>
-Sleep apnea.<br></h4></i>
              </form>
  
    
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
        
        
        
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
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
<script type="text/javascript">              
     function computeBMI() {
          //Obtain user inputs
         
         var weight = document.getElementById("weight").value;
         var height = document.getElementById("height").value;
      
         //Perform calculation
         var BMI = weight / Math.pow(height, 2);
      
         //Display result of calculation
       
        document.getElementById("output").innerHTML =  Math.round(BMI * 1000000) / 100;
        var roundoff= Math.round(BMI * 1000000) / 100;
         //document.write(BMI);
         if (roundoff < 18.5) document.getElementById("comment").innerHTML = "Underweight";
         if (roundoff >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "Normal";
        if (roundoff >= 25 && BMI <= 30) document.getElementById("comment").innerHTML = "Obese";
        if (roundoff > 30) document.getElementById("comment").innerHTML = "Overweight";       
      
     }
       
        </script>
</body>

</html>
