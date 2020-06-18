<?php
include("datalayer.php");
$id = $_GET['id'];
$data = readdriver($id);
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
        <h1>Watch <?= $data['name']?> here</h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="updateDriver.php?update=<?= $data["id"]?>">update driver</a>
            <a class="btn-lg btn-danger text-white" href="../index.php?delete=<?= $data["id"]?>" onclick="return confirm('Weet je zeker dat je het wilt verwijderen?')">Delete driver</a>
        </div>
    </div>

    <div class="content mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1" style="width: 300px;" src="../img/<?= $data['image']?>"/>

                    <div class="border-bottom">
                        <strong>Name: <?= $data['name']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Team: <?= $team['name']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Country: <?= $data['country']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Podiums: <?= $data['podiums']?></strong>
                    </div>
                   <div class="border-bottom">
                        <strong>Points: <?= $data['points']?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>World Champions: <?= $data['world_championships']?> </strong>
                    </div>
                     <div class="border-bottom">
                        <strong>Highest finish: <?= $data['highest_race_finish']?></strong>
                    </div>
                     <div class="border-bottom">
                        <strong>Highest grid: <?= $data['highest_grid_position']?> </strong>
                    </div>
                     <div class="border-bottom">
                        <strong>Date of birth: <?= $data['date_of_birth']?> </strong>
                    </div>
                     <div class="border-bottom">
                        <strong>Place of birth: <?= $data['place_of_birth']?></strong>
                    </div>
                </div>
            </div>
            <p class="card-text">
                <?=$data['biography']?>
            </p>
        </div>
    </div>
    <hr>
</div>

<footer class="bg-dark fixed-bottom">
    <?include('footer.php')?>
</footer>

</body>
</html>