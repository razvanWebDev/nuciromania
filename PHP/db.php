<?php
$site_key = '6Ldw5i8cAAAAANFTkcGHWLOLkKATwvD_NE3EHx-C';
$secret_key = '6Ldw5i8cAAAAAIT5d_N7WKS6muIvJFi6_nJC4cLF';
//LOCAL
  // $server = 'localhost';
  // $username = 'root';
  // $password = '';
  // $dbname = 'nuciromania';    

  $server = 'server-0347.whmpanels.com';
  $username = 'r91093nuci_flavian';
  $password = ']8[cZsUFY5)&';
  $dbname = 'r91093nuci_nuciromania';  

  $website_url = "www.nuciromania.ro";

  $connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
  die("Failed to connect to MySQL: " . mysqli_connect_error()) ;
}
?>