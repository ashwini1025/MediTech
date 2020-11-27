<?php

session_start();
$id =$_SESSION['user'];

$conn = mysqli_connect("localhost","root","", "meditech");
$query="select * from appointment" ;
$result= mysqli_query($conn, $query);

if(isset($_POST['apt']))
{
        $sql= "INSERT INTO appointment ( `Sr.no`,`Patient ID`, `Name`, `Problem`, `Allergies`, `Date`, `Created`) 
            VALUES ('NULL', '$_POST[PatientID]', '$_POST[Name]', '$_POST[Problem] ', '$_POST[Allergies]', '$_POST[date1]',  current_timestamp())";

       if ($conn->query($sql) === TRUE) 
       {
    echo "appointment has been booked ";
    header("location:bookapt.php");
        }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   }
   
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
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Welcome  to  Patients  Portal  </b></a>
        <!--logo end-->
      
        <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
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
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Book your appointment here !! </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
                <form action="" method="POST" class="form-horizontal style-form" > 
           
               <div class="form-group">
                  <label class="control-label col-md-3">Patient ID  </label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="PatientID">
                    <span class="help-block">enter four digit ID here </span>
                  </div>
               
            </div>
            
            <div class="form-group">
                  <label class="control-label col-md-3">Patients Name  </label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="Name">
                    <span class="help-block">enter your name </span>
                  </div>
               
            </div>
            
           
        
            <div class="form-group">
                  <label class="control-label col-md-3">Patients Problem   </label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="Problem">
                    <span class="help-block">Specify your problem  </span>
                  </div>
               
            </div>
             <div class="form-group">
                  <label class="control-label col-md-3">Allergies   </label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="Allergies">
                    <span class="help-block">Specify allergies if any  </span>
                  </div>
               
            </div>
             <div class="form-group">
                  <label class="control-label col-md-3">Appointment Date </label>
                  <div class="col-md-3 col-xs-11">
                      <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="" name="date1">
                    <span class="help-block">Select date</span>
                  </div>
                 
            </div>
           
           
             <button  class="btn btn-primary btn-lg btn-block" name="apt" > Confirm Appointment </button> 
        
                
              </form>
  
    
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->
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
      <!-- /wrapper -->
    </section>
