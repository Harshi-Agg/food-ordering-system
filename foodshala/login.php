/* This verifies the customer login details*/

<?php
$servername = "localhost";
$username = "id13881622_restreg";
$password = "?G[[p-W3p(4yZy#S";
$dbname = "id13881622_restaurant_registration";


session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
    if(empty($_POST['email']) || empty($_POST['password']))
    {
       $error = "<span class='red'>Please enter correct E-mail id and Password</span>";       
       header("location:index.php?error. $error");
    }
    else{
        $query= "SELECT * FROM customerReg WHERE email_id='".$_POST['email']."' and  rpassword='".$_POST['password']."'";
        $result= mysqli_query($conn, $query);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['user']=$_POST['email'];
            header("location:menuitem.php");
        }
        else{
            header("location:index.php?INVALID= Enter correct details");
        }
    }

}
?>