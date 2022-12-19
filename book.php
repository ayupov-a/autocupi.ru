<?php
require_once 'header.php';
require_once __DIR__ . '/boot.php';


$stmt_upd = pdo()->prepare("UPDATE catalog SET user_id = :user_id, booked = 1 WHERE id = :car_id");
$stmt_upd->execute([
        'user_id' => $_SESSION['user_id'],
        'car_id' => $_GET['id']
]);

$stmt_slct = pdo()->prepare("SELECT * FROM catalog WHERE id = :car_id");
$stmt_slct->execute(['car_id' => $_GET['id']]);
$car = $stmt_slct->fetch(PDO::FETCH_ASSOC);

?>
    <div class="container d-flex">
        <br><br>
        <div class="block bg-warning mx-auto">
            <div class="display-6 text-center">Забронировано!</div>
            <div class="col">
                <div class="card" style="width: 400px;">
                    <img src="<?= $car['photo']?>" class="card-img-top" alt="car">
                    <div class="card-body">
                        <h5 class="card-title"><?= $car['brand'] . ' ' . $car['model'] . ', ' . $car['year'] . ' '?></h5>
                        <h5 class="card-text text-muted"><?= $car['price'] . ' ₽'?></h5>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary log-btn" onclick="document.location='catalog.php'">Перейти в каталог</button>
            </div>
        </div>
        <br><br>
    </div>

    <?php

require_once 'footer.php';