<?
include('datalayer.php');
$data = readteams();
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

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>View all teams here</h1>
    </div>

    <ul class="list-group">
         <?foreach($data as $data){?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
        <? printf("<a class=\"item\" href=\"team.php?id=%u\">", $data["id"]); ?><?= $data['name']?></a>
        </li>
         <?}?>
    </ul>
</div>

<footer class="bg-dark fixed-bottom">
    <?include('footer.php')?>
</footer>


</body>
</html>