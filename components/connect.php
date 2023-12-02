<?php

$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password = '';
try{
  $conn = new PDO($db_name, $user_name, $user_password);
  // echo 'succcess';
} catch (PDOException $e) {
  // attempt to retry the connection after some timeout for example
  echo 'failed to connect to db';
}




?>