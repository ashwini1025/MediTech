<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title> MediTech E-health Platform </title>
        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <!-- Scripting for validation   -->
        <style>
            body{
                background-image: url('img/bb.jpg');
                background-repeat: no-repeat;
                background-size: cover;


            }  

        </style>
    </head>


    <body>
        <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
        <h1 align="center"> <br><br>  </h1> 
        <div id="login-page" >     
            <div class="col-md-6">
                <form name="signin" class="form-login"  action="connDB.php" method="post" >

                    <h2 class="form-login-heading"><i class="fa fa-user-circle-o fa-2x"></i> &nbsp;Patients Portal Sign in </h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" placeholder="User ID"  name=" usernameP"  required >
                        <br>
                        <input type="password" class="form-control" placeholder="Password"  name="passwordP" required>

                        <br>
                        <button class="btn btn-theme btn-block" name="loginP"> <i class="fa fa-lock"></i> SIGN IN -> Patient </button>
                        <hr>

                        <div class="registration">
                            Don't have an account yet?<br/>
                            <a data-toggle="modal" href="login.html#myModal">
                                Create an account
                            </a>
                            </form>

                        </div>
                    </div>
                    <!-- Modal -->
                    <form class="form-login"  action="regiDB.php" method="post" >
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Create an account </h4>
                                    </div>

                                    <div class="modal-body">
                                        <p>Create your user name </p>
                                        <input type="text"  placeholder="User name here" name="usernameP1" autocomplete="off" class="form-control placeholder-no-fix" required >
                                    </div>

                                    <div class="modal-body">
                                        <p>Create your password  </p>
                                        <input type="password" placeholder="Password here " name= "passwordP1" autocomplete="off" class="form-control placeholder-no-fix" required >
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" type="button">cancel </button>
                                        <button class="btn btn-theme"  name="signupP" >sign up </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                    <!-- modal -->
                </form>
            </div>
        </div>




        <div id="login-page" >     
            <div class="col-md-6">

                <form name="signinD" class="form-login"  action="connectDB.php" method="post" >

                    <h2 class="form-login-heading"> <i class="fa fa-user-plus fa-2x"></i>  Doctors  Portal Sign in </h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" placeholder="User ID"  name=" usernameD"  required >
                        <br>
                        <input type="password" class="form-control" placeholder="Password"  name="passwordD" required>
                        <br>
                        <button class="btn btn-theme btn-block" name="loginD"> <i class="fa fa-lock"></i> SIGN IN->Doctor </button>
                        <hr>

                        <div class="registration">
                            Don't have an account yet?<br/>
                            <a data-toggle="modal" href="login.html#myModaldoc">
                                Create an account
                            </a>
                            </form>

                        </div>
                    </div>
                    <!-- Modal -->
                    <form class="form-login"  action="registerDB.php" method="post" >
                        <div aria-hidden="true" aria-labelledby="myModalLabeldoc" role="dialog" tabindex="-1" id="myModaldoc" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Create an account </h4>
                                    </div>

                                    <div class="modal-body">
                                        <p>Create your user name </p>
                                        <input type="text"  placeholder="Doctors ID here" name="usernameD1" autocomplete="off" class="form-control placeholder-no-fix" required >
                                    </div>

                                    <div class="modal-body">
                                        <p>Create your password  </p>
                                        <input type="password" placeholder="Password here " name= "passwordD1" autocomplete="off" class="form-control placeholder-no-fix" required >
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" type="button">cancel </button>
                                        <button class="btn btn-theme"  name="signupD" >sign up </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                    <!-- modal -->
                </form>
            </div>
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>

    </body>

</html>

