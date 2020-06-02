<?php
function createDatabase(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "responsive crud";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
  echo "Connected successfully";
}
  catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
  }
}

function readdrivers(){
    $dbConn = createDatabase();
    $stmt = $dbConn->prepare("SELECT * FROM drivers");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConn = null;
    return $result;  
}

function readdriver($id){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM drivers WHERE id=:id");
  $stmt->bindParam(":id", $id);
  $stmt->execute();
  $result = $stmt->fetch();
  $dbConn = null;
  return $result;
}

function readteams(){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM teams");
  $stmt->execute();
  $result = $stmt->fetchAll();
  $dbConn = null;
  return $result;  
}

function teaminfo(){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM drivers");
  $stmt->execute();
  $result = $stmt->fetchAll();
  $dbConn = null;
  return $result;  
}

function addDriver($driver)
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("INSERT INTO drivers (name) VALUES ('$driver')");
  $stmt->execute();
  $dbConn = null;
}

?>