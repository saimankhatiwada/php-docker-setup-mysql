<?php

$servername = "practice-db:3306";
$username = "practice_user";
$password = "9d9dfbfbfdfd@S";

try{
  $conn = new mysqli($servername, $username, $password);
}
catch(Exception $e){
  print_r($e);
}
echo "Connected successfully";