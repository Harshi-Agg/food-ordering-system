/*Registers the restaurant registration detals to the table registration*/

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
$Name = $_POST['fname'];
$Email = $_POST['email'];
$phone= $_POST['phone'];
$restaurant = $_POST['restaurant'];
$Raddress = $_POST['Raddress'];
$Rpass = $_POST['Rpassword'];
if($Name !=''||$Email !='')
{
//Insert Query of SQL
$sql = "INSERT INTO registeration (fname , email_id , phoneno, restaurantName ,address, rpassword)
VALUES ('$Name', '$Email','$phone', '$restaurant', '$Raddress', '$Rpass')";
echo "<script> alert('Data Inserted successfully...!!');</script>";

}
else{
echo "<script> alert('Insertion Failed . Some Fields are Blank....!!');</script>";
}

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully'); </script>";
    echo "<script> location.href='items.html';</script>";
} 
}
?>