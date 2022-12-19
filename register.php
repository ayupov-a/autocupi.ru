<?php
require_once 'header.php';
require_once 'boot.php';
if (!empty($_SESSION['user_id'])){
    require_once 'profile.php';
    exit();
}else{
?>
<div class="modal" id="my-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Пользовательское соглашение</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <p>Пользовательское соглашение - это договор
                    Пользовательское соглашение - это договор между пользователем и владельцем сайта об условиях его использования. Пользовательсткое соглашение может включать условия оферты на коммерческое использование, но иногда лучше их разделять.

                    Не всякий пользователь готов разместить заказ на стадии ознакомления с сайтом, но вы уже начали собирать о нем данные. Если на сайте разрешена регистрация или есть форма обратной связи либо кнопка подписки на новости, необходимо обеспечить полчение согласия на обработку персональных данных пользователя в связи с заключением договора. В таком случае не требуется регистрация в Роскомнадзоре в качестве оператора персональных данных. Пользовательсткое соглашение играет роль такого договора.

                    Ниже приведен тест пользовательского соглашения для сайта в ознакомитьльных целях и даны подробные комментарии к его условиям.

                    Пользовательское соглашение сайта autocupi.ru
                    Настоящий документ "Пользовательское соглашение" представляет собой предложение ООО «AUTOCUPI» (далее — «Администрация»), заключить договор на изложенных ниже условиях Соглашения.


                    <br>1. Общие условия пользовательского соглашения
                    <br>1.1. В настоящем документе и вытекающих или связанным с ним отношениях Сторон применяются следующие термины и определения:

                    <br>а) Платформа — программно-аппаратные средства, интегрированные с Сайтом Администрации;

                    <br>б) Пользователь — дееспособное физическое лицо, присоединившееся к настоящему Соглашению в собственном интересе либо выступающее от имени и в интересах представляемого им юридического лица.

                    <br>в) Сайт Администрации/ Сайт — интернет-сайты, размещенные в домене http://autocupi.ru источник и его поддоменах.

                    <br>г) Сервис — комплекс услуг и лицензия, предоставляемые Пользователю с использованием Платформы.

                    <br>д) Соглашение - настоящее соглашение со всеми дополнениями и изменениями.

                    <br>1.2. Использование вами Сервиса любым способом и в любой форме в пределах его объявленных функциональных возможностей, включая:

                    <br>1.3. Воспользовавшись любой из указанных выше возможностей по использованию Сервиса вы подтверждаете, что:

                    <br>а) Ознакомились с условиями настоящего Соглашения в полном объеме до начала использования Сервиса.

                    <br>б) Принимаете все условия настоящего Соглашения в полном объеме без каких-либо изъятий и ограничений с вашей стороны и обязуетесь их соблюдать или прекратить использование Сервиса. Если вы не согласны с условиями настоящего Соглашения или не имеете права на заключение договора на их основе, вам следует незамедлительно прекратить любое использование Сервиса.

                    <br>в) Соглашение (в том числе любая из его частей) может быть изменено Администрацией без какого-либо специального уведомления. Новая редакция Соглашения вступает в силу с момента ее размещения на Сайте Администрации либо доведения до сведения Пользователя в иной удобной форме, если иное не предусмотрено новой редакцией Соглашения.

                    <br>2. Условия использования сайта
                    <br>2.1. Использование функциональных возможностей Сервиса допускается только после прохождения Пользователем регистрации и авторизации на Сайте в соответствии с установленной Администрацией процедурой.

                    <br>2.2. Технические, организационные и коммерческие условия использования Сервиса, в том числе его функциональных возможностей доводятся до сведения Пользователей путем отдельного размещения на Сайте или путем нотификации Пользователей.

                    <br>2.3. Выбранные Пользователем логин и пароль являются необходимой и достаточной информацией для доступа Пользователя на Сайт. Пользователь не имеет права передавать свои логин и пароль третьим лицам, несет полную ответственность за их сохранность, самостоятельно выбирая способ их хранения.

                    <br>3. Лицензия на использование сайта

                    <br>4. Гарантии в пользовательтском соглашении

                    <br>5. Лицензия на использование пользовательского контента

                    <br>6. Ограничение ответственности за пользование сайтом

                    <br>7. Согласие на рассылку

                    <br>8. Использование аналога собственноручной подписи на сайте

                    <br>9. Где разместить пользовательское соглашение на сайте

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="block bg-warning mx-auto" style="width: 550px">
    <h3 class="form-title text-center">Регистрация</h3>
    <?php flash();?>
    <form action="saveuser.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="inputFirstname" class="form-label">Фамилия</label>
            <input name="firstname" type="text" class="form-control" id="inputFirstname" placeholder="Иванов" required>
        </div>
        <div class="col-md-6">
            <label for="inputName" class="form-label">Имя</label>
            <input name="name" type="text" class="form-control" id="inputName" placeholder="Иван" required>
        </div>
        <div class="col-12">
            <label for="inputEmail" class="form-label">E-mail</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="ivanov@email.ru" required>
        </div>
        <div class="col-12">
            <label for="inputPass" class="form-label">Пароль</label>
            <input name="pass" type="password" class="form-control" id="inputPass" required>
        </div>
        <div class="col-md-6">
            <label for="inputPhone" class="form-label">Телефон</label>
            <input name="phone" type="tel" class="form-control" id="inputPhone" pattern="^((\+7|7|8)+([0-9]){10})$" placeholder="+7(999) 999-99-99" required>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Пол</label>
            <select name="sex" id="inputState" class="form-select">
                <option selected></option>
                <option>М</option>
                <option>Ж</option>
            </select>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Я принимаю условия <a href="#my-modal" data-bs-toggle="modal">пользовательского соглашения</a> и даю согласие на обработку персональных данных
                </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </div>
    </form>
</div>

<?php
}
require_once 'footer.php';