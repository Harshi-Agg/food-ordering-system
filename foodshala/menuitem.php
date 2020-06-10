/*This code diaplays all the menu to the users and takes order inputs*/

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu item</title>
    <link rel="stylesheet" href="menuitem.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <img
        src="https://envato-shoebox-0.imgix.net/2103/0ab1-92e8-4b34-a111-2edc23491222/food7_b267.jpg?auto=compress%2Cformat&fit=max&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1600&s=9ab20eb12500d9a3dfd06c107c0ad705"
        width="100%"
        height="400px"
      />
      <div class="centered">
        <h1 style="font-weight: 800; font-size: 80px;">Hungry?</h1>
        <h2 style="font-weight: 600; font-size: 40px;">
          Good, we are here to serve you!.
        </h2>
      </div>
    </div>
    <div class="header">
      <a href="index.php"><h1>HOME</h1></a>
      <a href="logout.php"><h1>Logout</h1></a>
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

$query="SELECT * from menulist";
$result= mysqli_query($conn, $query) or die("error");
while($rows= mysqli_fetch_array($result, MYSQLI_ASSOC)){
$ques= $rows['RestaurantName'];
$ch1=$rows['ItemName'];
$ch2=$rows['ItemDesc'];
$ch3=$rows['Price'];
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
    <h4 style='float: right;'>Rs.$ch3</h6>
  </span>";
  echo"<div style=align-content: center; text-align: center;'>";
  
   echo"<a href='order.php' onclick='getvalue();'><input type='button' style='background-color: crimson; padding: 2%; color: white; font-size: medium;border: none; width:50%; cursor: pointer;' name='order'  value='ORDER'></a>";
  echo"</div>";
echo"</div>";
}
?>
<script>
  funnction getvalue(){
    var restName= "<?php echo $ques ?>";
    var itemname= "<?php echo $ch1 ?>";
  }
</script> 
  </body>
</html>
