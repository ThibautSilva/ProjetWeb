<?php
  // Say to the browser that the returned content is a JSON content in UTF-8
  header('content-type: application/json; charset=utf-8');
  
  // Allow other sites to contact us
  header("Access-Control-Allow-Origin: *");

  // Connect to the database
  require 'base.php';
  // Character encoding of the database
  mysql_query("SET NAMES 'utf8'");

  // Build query
  $query = "SELECT  image_url, name, name , info FROM artists;";
  
  // Sort
  if (isset($_GET['sort'])){
    // By name
    if ($_GET['sort'] == "name"){
	  $query .= " ORDER BY name";
	}
  }

 
  // Inverted
  if (isset($_GET['inverted']) && $_GET['inverted'] == "true"){
    $query .= " DESC";
  }
  
  // n first results
  if (isset($_GET['limit'])){
    $query .= " LIMIT $_GET[limit]";
  }
  
  
  // Send query
  $result = mysql_query($query);

  // Get response
  $rows = array();
  for($row = mysql_fetch_assoc($result); $row != false; $row = mysql_fetch_assoc($result)){
    $rows[sizeof($rows)] = $row;
  }

  // Convert to JSON  
  $artists = array();
  $artists['artists'] = $rows;
  echo json_encode($artists, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>