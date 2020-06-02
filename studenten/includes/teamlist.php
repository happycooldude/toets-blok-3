<div class="mt-2">
        <div class="card" style="width: 300px;">
            <img class="card-img-top img-fluid" src="img/<?= $data["image"]?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?= $data['name']?></h4>
                <p class="card-text">
                    <?= $data['biography']?>
                </p>
                <? printf("<a class=\"item\" href=\"includes/driver.php?id=%u\">", $data["id"]); ?>More details</a>
            </div>
        </div>
    </div>

    <!--class="btn btn-primary">-->