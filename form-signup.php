<?php


$hello = '<h1>Danke für die Registrierung! Wir haben deine Daten erhalten!</h1>';

echo $hello;



$servername = "mysql:host=192.168.64.2";
$username = "root";
$password = "";
$dbname = "db_visitors";

// Create database connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO visitors (Email, Token, Disclaimer, created_at)
    VALUES ('john@example.com', 'gegdtd', '1', '2017-07-23')";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table visitors created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

exit();
