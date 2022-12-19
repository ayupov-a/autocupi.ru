<?php
require_once 'header.php';
require_once __DIR__.'/boot.php';

if (check_auth()) {
    header('Location: /');
    die;
}
?>

    <div class="block bg-warning mx-auto" style="width: 550px">
        <h3 class="form-title text-center">Авторизация</h3>
        <?php flash();?>
        <form action="do_login.php" method="post" class="row g-3">
            <div class="col-12">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="ivanov@email.ru" required>
            </div>
            <div class="col-12">
                <label for="inputPass" class="form-label">Пароль</label>
                <input name="password" type="password" class="form-control" id="inputPass" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>
    </div>

<?php
require_once 'footer.php';
