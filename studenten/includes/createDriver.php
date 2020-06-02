<?
include('datalayer.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $driver = $_POST["location"];
    addLocations($driver);
    header("Location: overzicht.php?locationadded");
    echo ('<script>alert("Locatie toegevoegd")</script>');
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
    <h1>Create a new driver here</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                name <input type="text" name="huisdier" maxlength="20" /><br><br>
                biography <input type="text" name="persoon" maxlength="20" /><br><br>
                image <input type="text" name="land" maxlength="20" /><br><br>
                team id <input type="text" name="verveeld" maxlength="20" /><br><br>
                country <input type="text" name="speelgoed" maxlength="20" /><br><br>
                podiums <input type="text" name="docent" maxlength="20" /><br><br>
                points <input type="text" name="kopen" maxlength="20" /><br><br>
                world championships <input type="text" name="bezigheid" maxlength="20" /><br><br>
                highest race finish <input type="text" name="bezigheid" maxlength="20" /><br><br>
                highest grid position <input type="text" name="bezigheid" maxlength="20" /><br><br>
                date of birth <input type="text" name="bezigheid" maxlength="20" /><br><br>
                place of birth <input type="text" name="bezigheid" maxlength="20" /><br><br>
                <input id="knop" type="submit" value="Versturen" />
            </form>
</div>

<footer class="bg-dark fixed-bottom">
    <p class="text-white p-2 m-0 text-center">&copy; Your name - 2020</p>
</footer>

</body>
</html>