

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
<form id="form" class="form">
    <div class="form-name">
        <label for="name" class="label-name">Имя:</label><br>
        <input name="name" class="name-input" placeholder="Ян - не имя!">
    </div>
    <div class="form-secondname">
        <label for="secondname" class="label-secondname">Фамилия:</label><br>
        <input name="secondname" class="secondname-input" placeholder="Введите фамилию.">
    </div>
    <div class="form-lastname">
        <label for="lastname" class="label-lastname">Отчество:</label><br>
        <input name="lastname" class="lastname-input" placeholder="Если есть.">
    </div>
    <div class="form-age">
        <label for="age" class="label-age">Возраст:</label><br>
        <input name="age" class="age-input" placeholder="От 18 до 99.">
    </div>
    <div class="form-country">
        <label for="country" class="label-country">Страна:</label><br>
        <select name="country" class="country-input">
            <option value="Россия">Россия</option>
            <option value="Япония">Япония</option>
            <option value="Мордор">Мордор</option>
        </select>
    </div>
    <div class="form-position">
        <label for="position" class="label-position">Должность:</label><br>
        <input name="position" class="position-input" placeholder="Надеемся в это любите.">
    </div>
    <div class="form-button">
        <button type="submit" class="submit-button">Отправить</button>
    </div>
</form>
<div id="message" class="message"></div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>