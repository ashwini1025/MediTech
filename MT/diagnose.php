<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
session_start();
$id = $_SESSION['user'];
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
                <?php $timestamp = time();
                echo "\n";
                echo(date("F d, Y h:i:s A", $timestamp)); ?>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="login.php"><?php echo " Name :" . $_SESSION['user'] . "" ?>Logout</a></li>
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
                <div id="content">
                    <section class="wrapper">
                    <h3><i class="fa fa-asterisk-"></i><center><br><b>Diabetic Type 2 risk AI evaluation test! </h3></center></b>
           <div class="row mt">

                        <div class="col-lg-12">
                            <div class="form-panel">
                              
                                    <div class="col-lg-4">
                                        <center> <span><h3><b>Questions  </h3> </span><hr>
                                        <span><h3> 1. How old are you? </h3> </span>
                                   
                                         <br><span><h3> 2.  What is your gender </h3> </span>
                                        
                                        <br><span><h3> 3.  Does anyone in your family diagnosed diabetes?   </h3> </span>
                                        
                                         <br><span><h3> 4.  High Blood pressure?   </h3> </span>
                                         
                                         <br><span><h3> 5. High Cholesterol ?    </h3> </span>
                                         
                                           <br><span><h3> 6. Are you Physically active ?     </h3> </span>
                                           
                                             <br><span><h3> 7. Is your BMI normal?     </h3> </span>
                                        </center>
                                    </div>
                                    
                                    <div class="col-lg-8">
                                      
                                        <span><h3><center><b>Select the suitable option </h3> </span><hr>
                                                        
                                        <!-- Question age-->                
                                        <span > 
                                         <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="age" id="age1" value="Less than 20" > Less than 20 
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="age" id="age2" value="Between 20- 40"> Between 20- 40 
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="age" id="age3" value="Between 20- 40"> Between 40 - 70 
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="age" id="age4" value="Above 70 years"> Above 70 years
                                        </label>
                                            </div>
                                         </span><br>
                                   <!-- age close -->
                                   
                                    <!-- Question gender-->                
                                    <br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="gender" id="gender1" value="female" > Female
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="gender" id="gender2" value="male"> Male  
                                        </label>
                                     
                                        </div></span><br><br>
                                   <!-- gender close -->
                                                        
                                   
                                   <!-- Question familyQ-->                
                                    <br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="fam" id="fam1" autocomplete="off" > Yes
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="fam" id="fam2" autocomplete="off"> No  
                                        </label>
                                     
                                        </div></span><br><br><br>
                                   <!-- familyQ close -->.
                                  
                                    <!-- Question BP's-->                
                                    <br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="bp" id="bp1" autocomplete="off" > Yes
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="bp" id="bp2" autocomplete="off"> No  
                                        </label>
                                     
                                        </div></span>
                                   <!-- BP close -->
                                   
                                   <!-- Question C's-->                
                                   <br> <br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="ch" id="ch1" autocomplete="off" > Yes
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="ch" id="ch2" autocomplete="off"> No  
                                        </label>
                                     
                                        </div></span>
                                   <!-- c close -->
                                   
                                   <!-- Question pa's-->                
                                   <br> <br><br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="pa" id="pa1" autocomplete="off" > Yes
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="pa" id="pa2" autocomplete="off"> No  
                                        </label>
                                     
                                        </div></span>
                                   <!-- pa close -->
                                   
                                    <!-- Question pa's-->                
                                    <br><br> <br><br><span><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-info ">
                                            <input type="radio" name="bmi" id="bmi1" autocomplete="off" > Yes
                                        </label>
                                        <label class="btn btn-info">
                                            <input type="radio" name="bmi" id="bmi2" autocomplete="off"> No  
                                        </label>
                                     
                                        </div></span>
                                   <!-- pa close -->
                  
                               </div>

                                    <br><br>
                                    <input type="submit"  class="btn btn-primary btn-lg btn-block" value="Diagnose" name="apt" onclick="Diagnose()">  
                                    <button class="btn btn-primary btn-lg btn-block" id="cmd" onclick="window.print()">generate PDF</button>
                            </div>
                            <!-- /form-panel -->
                        </div>
                        <!-- /col-lg-12 -->
                    </div>
                    
                    
                    <div class="form-panel">
                        <h3>    <center>Results will be displayed here  : </h3><hr>
                        <h4><center><b>   <span id="results"> </span> <br></center>
                                    <h4><center><b>   <span id="placehere"> </span> <br></center>
                                    <h4><center><b>   <span id="comments"> </span> <br></center>
                  
                    </div>

                </section>
                    
                </div>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
            <!--script for this page-->
            <script type="text/javascript">
               
   
    
    function Diagnose()
                {
                   //radio age
                   
	var ele = document.getElementsByName('age'); 
	for(i = 0; i < ele.length; i++) 
                   { 
	if(ele[i].checked) 
	var now_age= ele[i].value;
       
                    }
           
                    if(now_age == "Less than 20")
                    {
                         document.getElementById("results").innerHTML = "Low Risk ! ";
                          var x =document.createElement("IMG");
                                x.setAttribute("src", "low.jpg");
                                x.setAttribute("width", "200");
                                x.setAttribute("height", "150");
                         document.getElementById("placehere").appendChild(x);
                         document.getElementById("comments").innerHTML="Your risk for having type 2 diabetes is low. Only your doctor can tell for sure if you have diabetes or prediabetes. These conditions often do not cause any symptoms; so, don’t wait to make an appointment with your doctor";

                    }
                    else if (now_age == "Between 20- 40")
                    {
                          document.getElementById("results").innerHTML = "Medium Risk ! ";
                          var x =document.createElement("IMG");
                                x.setAttribute("src", "medium.jpg");
                                x.setAttribute("width", "200");
                                x.setAttribute("height", "150");
                         document.getElementById("placehere").appendChild(x);
                           document.getElementById("comments").innerHTML="Your risk for having type 2 diabetes is Medium. Only your doctor can tell for sure if you have diabetes or prediabetes. These conditions often do not cause any symptoms; so, don’t wait to make an appointment with your doctor";

                    }
                    else
                    {
                          document.getElementById("results").innerHTML = "High Risk ! ";
                          var x =document.createElement("IMG");
                                x.setAttribute("src", "high.jpg");
                                x.setAttribute("width", "200");
                                x.setAttribute("height", "150");
                         document.getElementById("placehere").appendChild(x);
                          document.getElementById("comments").innerHTML="Your risk for having type 2 diabetes is high. Only your doctor can tell for sure if you have diabetes or prediabetes. These conditions often do not cause any symptoms; so, don’t wait to make an appointment with your doctor";

                    }
               	
                }
  function demoFromHTML() {
    var pdf = new jsPDF('p', 'pt', 'letter');
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    source = $('#content')[0];

    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}

                
               

            </script>
    </body>

</html>
