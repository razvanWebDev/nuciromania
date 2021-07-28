<?php
//LOCAL
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'nuciromania';    

  // $server = 'server-0347.whmpanels.com';
  // $username = 'r91093nuci_flavian';
  // $password = ']8[cZsUFY5)&';
  // $dbname = 'r91093nuci_nuciromania';  

  $connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
  die("Failed to connect to MySQL: " . mysqli_connect_error()) ;
}
?>