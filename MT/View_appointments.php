<?php
session_start();
$id =$_SESSION['user'];

$conn = mysqli_connect("localhost","root","", "meditech");
$query="select * from appointment" ;
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
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WELCOME TO DOCTORS PORTAL </b></a>
        <!--logo end-->
      
        <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class=" logout " href="login.php"><?php echo "  ".$_SESSION['user']."" ?> : Logout</a></li>
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
              <a href="doc_profile.php">
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
      <section class="wrapper">
        <h2><i class="fa fa-bookmark"></i> Appointments Table  </h2>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
                <h4 align="center"> <i class="fa fa-sticky-note-o"></i> All scheduled appointments  </h4><br>
              <section id="">
                  <table  class=" table-condensed table table-responsive">
                <thead>
                  <tr>
                 <th>SR. NO </th>
                    <th>Patient  Name</th>
                    <th> Problem Description  </th>
                    <th>Allegries </th>
                    <th> Appointment Date</th>
                    <th> Decision <th>
                  
                  </tr>
                </thead>
                <?php  while($row= mysqli_fetch_array($result))
                                      {
                    ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['Sr.no']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Problem']; ?></td>
                    <td> <?php echo $row['Allergies']; ?></td>
                    <th><?php echo $row['Date']; ?></th>
                    <td>      <button class="btn btn-theme02"> Acknowledgement </button>
                        
                  
                  <?php } ?>
                </tbody>
              </table>
              </section>
                                      
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>


