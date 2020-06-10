/* This code log outs all type of users*/

<?php
 session_start();

  if(isset($_SESSION['user'])){
      session_destroy();
      
      echo"<script>alert('LoggedOut Succesfully!')</script>";
      include 'index.php';
  }
  else{
    echo"<script>alert('You are not logged in. Just go back to home!')</script>";
    include 'menuitem.php';
  }
?>