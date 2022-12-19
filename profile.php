<?php
require_once 'header.php';
require_once __DIR__ . '/boot.php';
if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
    ?>

<div class="container bg-warning sections">
    <h3 class="form-title text-center">Личные данные</h3>
    <form action="#" method="post" class="row g-3 block">
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Имя</label>
            <input name="name" type="text" class="form-control" id="inputEmail" value="<?= $user['name']?>">
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Фамилия</label>
            <input name="firstname" type="text" class="form-control" id="inputPass" value="<?= $user['firstname']?>">
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">E-mail</label>
            <input name="email" type="email" class="form-control" id="inputPass" value="<?= $user['email']?>">
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Телефон</label>
            <input name="phone" type="tel" class="form-control" id="inputPhone" pattern="^((\+7|7|8)+([0-9]){10})$" value="<?= $user['phone']?>">
        </div>
<!--        <div class="col-md-6">-->
<!--            <label for="inputPass" class="form-label">Пароль</label>-->
<!--            <input name="pass" type="pass" class="form-control" id="inputPass">-->
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!--            <label for="inputPass" class="form-label">Подтвердите пароль</label>-->
<!--            <input name="pass-acc" type="pass" class="form-control" id="inputPass">-->
<!--        </div>-->
<!--        <div class="col-12">-->
<!--            <button type="submit" class="btn btn-secondary">Сохранить изменения</button>-->
<!--        </div>-->
    </form>
</div>
<?php
require_once 'booked.php';
//require_once 'pref-view.php';
require_once 'footer.php';
