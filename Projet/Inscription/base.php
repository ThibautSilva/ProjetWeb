<?php
  // URL of the host
  $dbhost = "localhost"; 
  
  // Name of the database
  $dbname = "database";
  
  // User name
  $dbuser = "root";
  
  // Password (not used here)
  $dbpass = "password";
 
  mysql_connect($dbhost, $dbuser) or die("Erreur MySQL : ".mysql_error());
  mysql_select_db($dbname) or die("Erreur MySQL : ".mysql_error());
?>