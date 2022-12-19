<?php
require_once 'header.php';
?>


<main class="main">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="/img/slider-1.jpg" class="d-block w-100" alt="slider-1">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning">Купи с первого взгляда</h3>
                    <p>Здесь вы найдете авто на любой вкус и цвет. Мы поможем
                        подобрать автомобиль именно под вас.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="/img/slider-2.jpg" class="d-block w-100" alt="slider-2">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning">Купить авто - просто!</h3>
                    <p>Зарегестрируйтесь и мы сопроводим вас по всем этапам покупки
                        личного автомобиля. Расскажем вам обо всех аспектах при подборе машины.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="/img/slider-3.jpg" class="d-block w-100" alt="slider-3">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning">Только проверенные авто</h3>
                    <p>В наших каталогах автомобили только от проверенных продавцов.
                        Не стоит переживать, что вы пожалеете о покупке. </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
    <div class="text-center bg-light">
        <h1 class="h-head">Наш агрегатор - лидер на рынке автоподбора!</h1>
        <p class="text-break lh-2 h-text">Разместите тут краткое описание вашего спец-предложения, товара или услуги! Таким образом можно компоновать блоки используя<br>текстовый виджет и рядом с ним поставить произвольную картинку. Вы можете менять цвет, стиль текста и даже поставить ссылку. </p>
        <button type="button" onclick="document.location='about.php'" class="btn btn-warning btn-lg sec-btn">О нас</button>
    </div>
    <div class="container">
        <div class="row justify-content-around cards-section text-center">
            <div class="card" style="width: 300px;">
                <img src="/img/account.jpg" class="card-img-top" alt="Account">
                <div class="card-body">
                    <h5 class="card-title">Заполните профиль</h5>
                    <p class="card-text">Для начала, заполните профиль личными данными и предпочтениями в желаемом автомобиле.</p>
                    <a href="register.php" class="btn btn-warning"><?php if (empty($_SESSION['user_id'])): ?>Создать профиль<?php else:?>Заполните профиль<?php endif;?> </a>
                </div>
            </div>
            <div class="card"  style="width: 300px;">
                <img src="/img/offer.jpg" class="card-img-top" alt="catalog">
                <div class="card-body">
                    <h5 class="card-title">Рассмотрите предложения</h5>
                    <p class="card-text">Вам будет предложены автомобили, согласно вашим предпочтениям.</p>
                    <a href="catalog.php" class="btn btn-warning">Каталог</a>
                </div>
            </div>
            <div class="card"  style="width: 300px;">
                <img src="/img/byuing.jpg" class="card-img-top" alt="booking">
                <div class="card-body">
                    <h5 class="card-title">Забронируйте автомобиль </h5>
                    <p class="card-text">Остается лишь забронировать автомобиль, который вам понравился для дальнейшего осмотра и оформления.</p>
                    <a href="#" class="btn btn-warning">Порядок бронирования</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-warning">
        <h1 class="h-head">Крах цен на все услуги! Скидки 10-50%</h1>
        <p class="text-break lh-2 h-text">Успейте воспользоваться нашими услугами для приобретения автомобиля мечты. Все скидки действуют до 31 декабря 2022 года.</p>
        <button type="button" class="btn btn-secondary btn-lg sec-btn">Каталог</button>
    </div>
</main>
<?php
require_once 'footer.php';
