
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<div class="container bg-secondary sections text-light">
    <h3 class="form-title text-center">Фильтр</h3>
    <?php flash();?>
    <form action="catalog.php" method="post" class="row g-3 block">
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Модель</label>
            <input name="brand" type="text" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Марка</label>
            <input name="model" type="text" class="form-control" id="inputPass">
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Тип кузова</label>
            <select name="body" class="form-select" aria-label="Кузов">
                <option selected value="-1">Любой</option>
                <option value="1">Седан</option>
                <option value="2">Внедорожник</option>
                <option value="3">Хэтчбек</option>
                <option value="4">Лифтбек</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Тип двигателя</label>
            <select name="engine" class="form-select" aria-label="Движок">
                <option selected value="-1">Любой</option>
                <option value="1">Бензиновый</option>
                <option value="2">Дизель</option>
                <option value="3">Гибрид</option>
                <option value="4">Электро</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Цена</label>
            <div class="input-group">
                <input id="input-kek" name="price-from" type="number" aria-label="От, руб" class="form-control" placeholder="Цена от">
                <input id="input-kek" name="price-to" type="number" aria-label="До, руб" class="form-control" placeholder="до, руб">
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Пробег</label>
            <div class="input-group">
                <input id="input-kek" name="mile-from" type="number" aria-label="От, км" class="form-control" placeholder="Пробег от">
                <input id="input-kek" name="mile-to" type="number" aria-label="До, км" class="form-control" placeholder="до, км">
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Мощность, л.с.</label>
            <select name="power" class="form-select" aria-label="Движок">
                <option selected value="-1">Любая</option>
                <option value="0">0-100</option>
                <option value="100">100-200</option>
                <option value="200">200-300</option>
                <option value="300">300-400</option>
                <option value="400">400-500</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPass" class="form-label">Цвет</label>
            <select name="color" class="form-select" aria-label="Цвет">
                <option selected value="-1">Любой</option>
                <option value="red">Красный</option>
                <option value="green">Зеленый</option>
                <option value="black">Черный</option>
                <option value="white">Белый</option>
                <option value="blue">Синий</option>
                <option value="yellow">Желтый</option>
                <option value="silver">Серебристый</option>
                <option value="grey">Серый</option>
                <option value="brown">Коричневый</option>
                <option value="orange">Оранжевый</option>
                <option value="purple">Фиолетовый</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" name="filter" class="btn btn-warning">Показать автомобили</button>
        </div>
    </form>

</div>
