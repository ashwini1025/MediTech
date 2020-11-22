<?php
session_start();
$id =$_SESSION['user'];

$conn = mysqli_connect("localhost","root","", "meditech");
$query="select * from docprofile where name='$id' ";
$result= mysqli_query($conn, $query);
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
    
    <!--header start-->
   <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WELCOME TO DOCTORS PORTAL <?php echo " Name :".$_SESSION['user']."" ?></b></a>
        <!--logo end-->
        <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php"> <?php echo " Name :".$_SESSION['user']."" ?>Logout</a></li>
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
              <a href="profile.php">
              <i class="fa fa-user-circle"></i>
              <span>My Profile  </span>
              </a>
         </li>
         
         <li class="sub-menu">
              <a href="View_appointments.php">
              <i class="fa fa-tasks"></i>
              <span>View Appointment </span>
              </a>
         </li>
         
          <li class="sub-menu">
              <a href="Patient_history.php">
              <i class="fa fa-th"></i>
              <span> Patients History </span>
              </a>
          </li> 
          
          
          <li class="sub-menu">
            <a href="doc_chat.php">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
            </a>
          </li>
          
          
           
           <li class="sub-menu">
            <a href="about.php">
              <i class="fa fa-bell-o"></i>
              <span>About Us </span>
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
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-sm-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
              <?php  while($row= mysqli_fetch_array($result))
                                      {
                    ?>
                    <h4>   <?php echo $row['no_patients']; ?></h4>
                  <h6>Patients</h6>
                  <h4> <?php echo $row['Education']; ?></h4>
                  <h6>Education  </h6>
                  <h4> <?php echo $row['Employee']; ?></h4>
                  <h6>Employee</h6>
                </div>
              </div>
                                     
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>Dr. <?php echo $row['name']; ?> &nbsp; <?php echo $row['lname']; ?> </h3>
                <h6> <?php echo $row['position']; ?></h6>
                <p> <?php echo $row['Description']; ?> </p>
                <br>
         
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src=" <?php echo $row['img']; ?>" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><i class="fa fa-check"></i>  <?php echo $row['location_h']; ?></button>
                    <button class="btn btn-theme02"> <?php echo $row['position']; ?> </button>
                  </p>
                </div>
              </div>
            </div>
             
               <?php }
                                      ?>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
       
          <!-- /col-lg-12 --><!------------------------------------------------------------------------------------------------------------------------------------->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li>
                 
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-12 detailed">
                        <h4>User Stats</h4>
                        <div class="row centered mt mb">
                          <div class="col-sm-4">
                            <h1><i class="fa fa-money"></i></h1>
                            <h3>$22,980</h3>
                            <h6>LIFETIME EARNINGS</h6>
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-trophy"></i></h1>
                            <h3>37</h3>
                            <h6>Operations Success</h6>
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-shopping-cart"></i></h1>
                            <h3>1980</h3>
                            <h6>Patients Cured </h6>
                          </div>
                        </div>
                      </DIV>
                    </DIV>
                      <!-- /col-md-6 -->
                  </DIV>
                  
              
                 <div id="contact" class="tab-pane">
                                     
                        <div class="col-md-12 detailed">
                        <h4>Location</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p>
                            Postal Address<br/> PO BOX 12988, Sutter Ave<br/> Brownsville, New York.
                          </p>
                          <br>
                          <p>
                            Headquarters<br/> 844 Sutter Ave,<br/> 9003, New York.
                          </p>
                        
                        <h4>Contacts</h4>
                          <p>
                            Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                          </p>
                          <br>
                          <p>
                            Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> Website: http://Alvarez.is
                          </p>
                        </div>
                                   </div>
                                    </div>
                                   </div>
                              </div>
                          </div>
                </div>
                </div>
              
             </section>
       </section>
   
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
 
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
</body>

</html>

