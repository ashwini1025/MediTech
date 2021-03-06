
<?php
session_start();
$id =$_SESSION['user'];

$conn = mysqli_connect("localhost","root","", "meditech");
$query="select * from personal_info where name='$id'" ;
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
      <a href="index.html" class="logo"><b>MEDI<span>TECH</span><img src="img/LOGO.png" height="50" width="50"></b>  <b align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WELCOME TO PATIENTS PORTAL </b></a>
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
            <a href="chat_p.php">
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
    <div class="row mt">
    <div class="col-lg-12">
        <div class="content-panel">
        
            
            <div class="form-panel">
            <form>
                 <h3> Personal records :  <?php echo " @".$_SESSION['user']."" ?> </h3></center><br>
               
         
                  <table  class=" table-hover table table-responsive ">
                
                <?php  while($row= mysqli_fetch_array($result))
                                      {
                    ?>
                <tbody>
                  <tr>
                    <th>Patients ID</th>
                    <td><?php echo $row['Patient_ID']; ?></td>
                  </tr>
                 
                  <tr>
                     <td>First Name</td> 
                      <td><?php echo $row['name']; ?></td>
                  </tr>
                    
                  <tr>
                        <td>Last Name</td>
                        <td><?php echo $row['Last_Name']; ?></td>
                  </tr>
                  
                  <tr>
                      <td>Age</td>
                      <td><?php echo $row['Age']; ?></td>
                  </tr>
                  
                  <tr>
                      <td>Address</td>
                      <td><?php echo $row['Address']; ?></td>
                  </tr>
                  
                    <tr>
                      <td>Issues</td>
                      <td><?php echo $row['issue']; ?></td>
                  </tr>
                  
                  <tr>
                    <td> Allergies</td>
                      <td><?php echo $row['Allergies']; ?></td>
                  </tr>
                  
                  <tr>
                    <td> Phone number</td>
                      <td><?php echo $row['Phone']; ?></td>
                  </tr>
                  
                  <tr>
                    <td> Emergency Contact </td>
                      <td><?php echo $row['Emergency_no']; ?></td>
                  </tr>
                  
                  <tr>
                    <td> Family Doctor </td>
                      <td><?php echo $row['Family_doctor']; ?></td>
                  </tr>
                  
                  <?php } ?>
                </tbody>
              </table>
               
                 
                
                
                
                <br><br>
            </form>
        </div>
        
    </div>
    </div>
    </div>
      </section>
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

</body>

</html>
