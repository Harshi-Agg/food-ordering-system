/*This code enters the order placed into table orders.*/

<script>
   var querystring = location.search.substring(1);
   var a= querystring.split('|')
   var a1= a[0];
   var a2= a[1];
</script> 
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
$restname= "<script>document.write(a1)</script>";
$itemname= "<script>document.write(a2)</script>";
$session= $_SESSION['user'];


$sql = "INSERT INTO orders (RestaurantName, ItemName, User)
VALUES ('$restname','$itemname','$session')";
if ($conn->query($sql) === TRUE) {
    echo"<script>alert('Order more')</script>";
    include 'menuitem.php';
} 

?>