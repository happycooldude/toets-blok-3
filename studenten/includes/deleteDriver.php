<?
include("datalayer.php");
$data = readdriver($id);
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    removeDriver($id);
}
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#"><img class="img-fluid img-thumbnail" style="width:200px;" src="../img/logo.jpg"/></a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Drivers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teams.php">Teams</a>
            </li>
        </ul>
    </div>
</nav>

<div class="mb-5 mt-2">
    <h1>Remove a driver here</h1>
    <a href="driver.php?delete=<?= $data["id"]?>" class="verwijder"  onclick="return confirm('Weet je zeker dat je het wilt verwijderen?')">Verwijder</a>
</div>

<footer class="bg-dark fixed-bottom">
    <?include('footer.php')?>
</footer>

</body>
</html>