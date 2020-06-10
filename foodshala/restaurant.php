<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Items</title>
    <link rel="stylesheet" href="items.css" />
  </head>
  <body>
    <div class="maincontainer">
      <div class="header">
        <a href="index.php"><h1 style="float: left;">HOME</h1></a>
        <a href="items.html"><h1 style="float: right;">ADD ITEMS</h1></a>
      </div>
    </div>
    <?php  
    echo"<div class="overlay">";
include_once('restlogin.php');
$query="SELECT * from menulist WHERE RestaurantName='$restName';
$result= mysqli_query($conn, $query) or die("error");
while($rows= mysqli_fetch_array($result, MYSQLI_ASSOC)){
$RestName= $rows['RestaurantName'];
$ItemName=$rows['ItemName'];
$ItemDesc=$rows['ItemDesc'];
$Price=$rows['Price'];

echo"<div class="modal">";
    echo"<span>";
     echo" <i
      class="fas fa-hamburger"
      style="font-size: 24px; color: rgb(145, 82, 134);"
      ><h3>heading</h3></i
    >";
    echo"</span>";
  
  echo"<p style="font-size: medium;"> desc</p>";
  echo"<span style="display: inline-block;">
    <h4 style="float: left;">rest</h6>
    <h4 style="float: right;">Rs.price</h6>
  </span>";
  echo"<div style="align-content: center; text-align: center;">";
   echo"<button style="background-color: crimson; padding: 2%; color: white; font-size: medium;border: none; width:50%; cursor: pointer;">order</button>";
  echo"</div>";
echo"</div>";
echo"</div>";
}
?>
  </body>
</html>
