<?php
function openDatabase(){
  $host = "localhost";
  $username = "root";
  $password = "mysql";
  $database = "backend";

  try {
    $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connect;
  } catch (PDOException $error) {
    die("kan geen verbiding maken met de db");
  }
}
?>