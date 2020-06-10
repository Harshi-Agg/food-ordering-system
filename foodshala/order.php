/*This code checks whether the user is logged in while ordering. Also, checks whether it is a user ordering food or a restauarnt user*/
<?php
   
   session_start();
   
   if (isset($_SESSION['user']) && $_SESSION['user'] != '') 
   {  
      echo"<script>alert('Order placed successfully')</script>";
      include 'orderdata.php';
      
      
   }
   else{
        echo"<script>alert('Please login first')</script>";
        include 'index.php';
        
   }

?>