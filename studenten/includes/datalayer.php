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

function addDriver($newdriver)
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("INSERT INTO `drivers`(`name`, `biography`, `image`, `team_id`, `country`, `podiums`, `points`, `world_championships`, `highest_race_finish`, `highest_grid_position`, `date_of_birth`, `place_of_birth`) VALUES ('$newdriver[name]','$newdriver[biography]','$newdriver[image]',$newdriver[team_id],'$newdriver[country]',$newdriver[podiums],$newdriver[points],$newdriver[world_championships],$newdriver[highest_race_finish],$newdriver[highest_grid_position],'$newdriver[date_of_birth]','$newdriver[place_of_birth]')");
  $stmt->execute();
  $dbConn = null;
}

function removeDriver($id)
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("DELETE FROM drivers WHERE id='$id'");
  $stmt->execute();
  $dbConn = null;
}

function updatedriver($updatedriver,$id){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("UPDATE `drivers` SET `name`='$updatedriver[name]',`biography`='$updatedriver[biography]',`image`='$updatedriver[image]',`team_id`=$updatedriver[team_id],`country`='$updatedriver[country]',`podiums`=$updatedriver[podiums],`points`=$updatedriver[points],`world_championships`=$updatedriver[world_championships],`highest_race_finish`=$updatedriver[highest_race_finish],`highest_grid_position`=$updatedriver[highest_grid_position],`date_of_birth`='$updatedriver[date_of_birth]',`place_of_birth`='$updatedriver[place_of_birth]' WHERE id=$id");
  $stmt->execute();
  $dbConn=null;
}

?>