<?php
require_once 'header.php';
require_once __DIR__ . '/boot.php';


$stmt = pdo()->prepare("SELECT * FROM catalog WHERE user_id = :id");
$stmt->execute(['id' => $_SESSION['user_id']]);
?>
<div class="container bg-secondary sections">
    <h3 class="form-title text-center text-light">Забронированные авто</h3>
            <div class="d-flex flex-row justify-content-center">
    <?php
    while ($car = $stmt->fetch()){
    ?>
                <div class="mx-auto">
                    <div class="card" style="width: 400px;">
                        <img src="<?= $car['photo']?>" class="card-img-top" alt="car">
                        <div class="card-body">
                            <h5 class="card-title"><?= $car['brand'] . ' ' . $car['model'] . ', ' . $car['year'] . ' '?></h5>
                            <h5 class="card-text text-muted"><?= $car['price'] . ' ₽'?></h5>
                        </div>
                        <a href="del-book.php?id=<?=$car['id']?>" class="btn btn-danger" style="width: 200px;">Отозвать бронь</a>
                    </div>
                </div>
        <?php }?>
            </div>
    <br>
</div>
    <br>
    <br>
    <br><br><br><br><br><br>
<?php
require_once 'footer.php';
?>