
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meditech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['signupP']))
{
        $sql= "INSERT INTO patdb (name,pass)
            VALUES ('$_POST[usernameP1]','$_POST[passwordP1]')";

       if ($conn->query($sql) === TRUE) 
       {
    echo "You are signed in";
    header("location:bookapt.php");
        }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
   }
   
?>