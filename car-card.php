<?php
require_once __DIR__ . '/boot.php';
require_once 'header.php';

$stmt = pdo()->prepare("SELECT * FROM catalog WHERE id = :car_id");
$stmt->execute(['car_id' => $_GET['id']]);
$car = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<div class="container">
    <div class="bg-warning block-naming">
        <p class="display-6"><?= $car['brand'] . ' ' . $car['model'] . ', ' . $car['year']?></p>
    </div>
    <div class="row">
        <div class="col">
            <img src="<?= $car['photo']?>" alt="car-photo" style="width: 700px;">
        </div>
        <div class="col">
            <div class="bg-warning text-center block-price" style="width: 300px;">
                <h4 class="text-left display-6"><?= $car['price']?> ₽</h4>
                <?php
                if (empty($_SESSION['user_id'])):
                ?>
                <p class="text-muted" style="color: red;">Функция брони доступна только авторизованным пользователям</p>
                    <?php else:
                    ?>
                    <a href="book.php?id=<?=$car['id']?>" class="btn btn-secondary">Забронировать</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <h4 class="text-left">Характеристики:</h4>
    <p class="text-muted">Пробег: <?= $car['mileage']?> км</p>
    <p class="text-muted">Тип двигателя:
    <?php
    switch ($car['engine']){
        case 1:
            print 'Бензиновый';
            break;
        case 2:
            print 'Дизельный';
            break;
        case 3:
            print 'Гибрид';
            break;
    }
    ?>
    </p>
    <p class="text-muted">Тип кузова:
    <?php
    switch ($car['body']){
        case 1:
            print 'Седан';
            break;
        case 2:
            print 'Внедорожник';
            break;
        case 3:
            print 'Хэтчбек';
            break;
        case 4:
            print 'Лифтбек';
            break;
    }
    ?>
    </p>
    <p class="text-muted">Мощность: <?= $car['power']?> л.с.</p>
    <h4 class="text-left">Расположение:</h4>
    <p><?= $car['location']?></p><br>
    <br>
    <h4 class="text-left">Описание:</h4>
    <p><?= $car['description']?></p><br>

    <br><br>
</div>
<?php
require_once 'footer.php';