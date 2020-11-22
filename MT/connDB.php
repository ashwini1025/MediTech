
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
          header("location:bookapt.php");   
         
     
    }
    else 
    {
       $query="select * from patdb where name='".$_POST['usernameP']."' and pass='".$_POST['passwordP']."' ";
       $result= mysqli_query($conn, $query);
       if(mysqli_fetch_assoc($result))
       {
          $_SESSION['user']= $_POST['usernameP'];
         header("location:bookapt.php"); ////update this ashhh to go to page 2 
          $id= $_SESSION['user'];
          echo $id;
          
         
        
       } else 
       {
          echo error  ;  
          header("location:index1.html");   ///update thisss locationnn ashhh
          
       }
    }
    
    
}
 else 
 {
   echo"here";
 }

