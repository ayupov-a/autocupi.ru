<?php
session_start();
require_once 'boot.php';
$user = null;
if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/logo.svg" title="car icons">

    <title>AUTOCUPI - Сервис по подбору автомобиля</title>
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.svg" width="30" height="30" alt="Logo">
                AUTOCUPI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">О нас</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Услуги
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="set-pref.php">Подобрать автомобиль</a></li>
                            <li><a class="dropdown-item" href="404.html">Страховые услуги</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">Каталог</a>
                    </li>
                </ul>
                <?php
                if (!$user):
                ?>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <button type="submit" class="btn btn-secondary log-btn" onclick="document.location='auth-form.php'" data-bs-toggle="modal" data-bs-target="#authModal">Войти</button>
                    </li>
                    <li class="nav-item">
                        <button type="submit" class="btn btn-warning log-btn" onclick="document.location='register.php'" data-bs-toggle="modal" data-bs-target="#registerModal">Зарегестрироваться</button>
                    </li>
                </ul>
                <?php
                else:?>
                <div class="dropdown">
                    <button type="button" class="btn btn-warning dropdown-toggle acc-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/account.svg" alt="account">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Профиль</a></li>
                        <li><a class="dropdown-item" href="booked.php">Мои брони</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Выход</a></li>
                    </ul>
                </div>
                <?php
                endif;?>
            </div>
        </nav>
    </div>
</header>


