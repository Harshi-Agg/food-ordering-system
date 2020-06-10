/*This code displays all the order list ordered by users*/


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu item</title>
    <link rel="stylesheet" href="vieworders.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
    </div>
    <div class="header">
      <a href="index.php"><h1>HOME</h1></a>
      <a href="logout.php"><h1>Logout</h1></a>
      <a href="items.html"><h1>AddItems</h1></a>
    </div>
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

$query="SELECT * from orders";
$result= mysqli_query($conn, $query) or die("error");
while($rows= mysqli_fetch_array($result, MYSQLI_ASSOC)){
$ques= $rows['RestaurantName'];
$ch1=$rows['ItemName'];
$ch2=$rows['User'];

echo"<div class='modal' style='display: flex; flex-direction:column;'>";
    echo"<span>";
     echo" <i
      class='fas fa-hamburge'
      style='font-size: 24px; color: rgb(145, 82, 134);'
      ><h3>$ch1</h3></i
    >";
    echo"</span>";
  
  echo"<p style='font-size: medium;'> $ch2</p>";
  echo"<span style='display: inline-block;'>
    <h4 style='float: left;'>$ques</h6>
    
  </span>";
  echo"<div style=align-content: center; text-align: center;'>";
  
  echo"</div>";
echo"</div>";
}
?>

  </body>
</html>
