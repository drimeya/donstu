<?php require($_SERVER['DOCUMENT_ROOT'].'/layout/header.php')?>
<h1>Регистрация</h1>
<p>Зарегистрируйтесь для участия в бонусной программе</p>
<form class="form">
    <div class="form__group">
        <h3 data-for="adult" class="form__group__title">Вам есть 18 лет?</h3>
        <select name="adult" id="adult">
            <option value="Да">Да</option>
            <option value="Нет">Нет</option>
        </select>
    </div>
    <div class="form__group">
        <div class="item">
            <label for="name" data-for="name" class="form__group__title">Ваше имя</label>
            <input type="text" id="name" name="name" placeholder="Иван" required>
        </div>
    </div>
    <div class="form__group">
        <div class="item">
            <label for="tel"  data-for="tel" class="form__group__title">Номер телефона</label>
            <input type="text" id="tel" name="tel" class="tel" placeholder="+7 (952) 569-56-65" required>
        </div>
    </div>
    <div class="form__group">
        <h3 data-for="sex" class="form__group__title">Укажите ваш пол</h3>
        <fieldset>
            <div class="item">
                <input type="radio" name="sex" id="men" value="Мужчина">
                <label for="men">Мужчина</label>
            </div>
            <div class="item">
                <input type="radio" name="sex" id="woman" value="Женщина">
                <label for="woman">Женщина</label>
            </div>
        </fieldset>
    </div>
    <div class="form__group">
        <h3 data-for-service class="form__group__title">Какими нашими услугами вы пользуетесь?</h3>
        <fieldset>
            <div class="item">
                <input type="checkbox" name="zalog" id="zalog" value="Деньги под залог">
                <label for="zalog">Деньги под залог</label>
            </div>
            <div class="item">
                <input type="checkbox" name="sale" id="sale" value="Продажа">
                <label for="sale">Продажа</label>
            </div>
            <div class="item">
                <input type="checkbox" name="buy" id="buy" value="Покупка">
                <label for="buy">Покупка</label>
            </div>
        </fieldset>
    </div>
    <div class="form__group">
        <label for="about" data-for="about" class="form__group__title">О себе</label>
        <textarea name="about" id="about" cols="30" rows="10"></textarea>
    </div>
    <button class="form__btn">Зарегистрироваться</button>
    <p>Уже есть аккаунт? <a href="/sign-in/">Войти</a></p>
</form>
<div class="form__result">
    <h2>Вы ввели данные:</h2>
    <div id="form-res"></div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php')?>