/* This code enters the menu items and its details entered by the restaurant in table menulist*/



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
$Name = $_POST['name'];
$item = $_POST['item'];
$desc= $_POST['desc'];
$price = $_POST['price'];

if($Name !=''||$item !='')
{
//Insert Query of SQL
$sql = "INSERT INTO menulist (RestaurantName, ItemName, ItemDesc, Price)
VALUES ('$Name', '$item','$desc', '$price')";
echo "<script> alert('Data Inserted succe'ssfully...!!');</script>";

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