
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meditech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['loginP']))
{
    if(empty($_POST['usernameP']) || empty($_POST['passwordP']))
    {
          echo error  ;  
          header("location:login.php");   
         
     
    }
    else 
    {
       $query="select * from patdb where name='".$_POST['usernameP']."' and pass='".$_POST['passwordP']."' ";
       $result= mysqli_query($conn, $query);
       if(mysqli_fetch_assoc($result))
       {
          $_SESSION['user']= $_POST['usernameP'];
         header("location:pat_records.php"); ////update this ashhh to go to page 2 
          $id= $_SESSION['user'];
          echo $id;
          
         
        
       } else 
       {
           
       echo "<h1> Wrong inputs </h1>";
          header("location:login.php");
       }
    }
    
    
}
 else 
 {
    echo "<h1> Wrong inputs </h1>";
     header("location:login.php");
 }

