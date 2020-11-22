<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meditech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['loginD']))
{
    if(empty($_POST['usernameD']) || empty($_POST['passwordD']))
    {
          echo error  ;  
          header("location:login.html");   
         
     
    }
    else 
    {
       $query="select * from docdb where name='".$_POST['usernameD']."' and pass='".$_POST['passwordD']."' ";
       $result= mysqli_query($conn, $query);
       if(mysqli_fetch_assoc($result))
       {
          $_SESSION['user']= $_POST['usernameD'];
         header("location:doc_profile.php"); ////update this ashhh to go to page 2 
          $id= $_SESSION['user'];
          echo $id;
          
         
        
       } else 
       {
          echo error  ;  
          header("location:index1.php");   ///update thisss locationnn ashhh
          
       }
    }
    
    
}
 else 
 {
   echo"here";
 }
