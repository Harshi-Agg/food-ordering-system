/* This code records the registered customer data in table customerReg */



<?php
$servername = "localhost";
$username = "id13881622_restreg";
$password = "?G[[p-W3p(4yZy#S";
$dbname = "id13881622_restaurant_registration";



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
$Name = $_POST['username'];
$Email = $_POST['email'];
$phone= $_POST['phone'];
$Raddress = $_POST['address'];
$foodtype = $_POST['foodtype'];
$Rpass = $_POST['password'];
if($Name !=''||$Email !='')
{
//Insert Query of SQL
$sql = "INSERT INTO customerReg (fname , email_id , phoneno , Caddress,foodtype, rpassword)
VALUES ('$Name', '$Email','$phone',  '$Raddress', '$foodtype','$Rpass')";
echo "<script> alert('Data Inserted successfully...!!');</script>";

}
else{
echo "<script> alert('Insertion Failed . Some Fields are Blank....!!');</script>";
}

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully'); </script>";
    echo "<script> location.href='menuitem.php';</script>";
} 
}
?>