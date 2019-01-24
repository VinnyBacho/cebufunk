<?php
  $username = 'root';
  $password = '';
  $server = 'localhost';
  $database = 'cebufunk';
  
  try {
      $con = mysqli_connect($server, $username, $password, $database);
  } catch (exceception $e) {
      $e->getMessage();
  }
?>