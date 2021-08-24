<?php
  $con= mysqli_connect("localhost","root","12345678","midtermtest");
  
  if (mysqli_connect_error()) {
      echo  "Failed to connect to database". mysqli_connect_error();
  }
?>