<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meditech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['signupD']))
{
        $sql= "INSERT INTO docdb (name,pass)
            VALUES ('$_POST[usernameD1]','$_POST[passwordD1]')";

       if ($conn->query($sql) === TRUE) 
       {
    echo "You are signed in";
    header("location:login.php");
        }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   }
   
?>