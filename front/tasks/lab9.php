<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9</title>
</head>
<body>
<form class="form">
        <input name="textarea" placeholder="Поле1">
        <select id="UsersList" name="optionslist">
            <option value="" disabled selected>Список опций</option>
            <option value="Option 1">Опция 1</option>
            <option value="Option 2">Опция 2</option>
            <option value="Option 3">Опция 3</option>
        </select>
        <p><input type="button" value="Добавить значение" onclick="Add()" /></p>
        <p><input type="button" value="Перемешать" onclick="MixArr()"></p>
        <p><input type="button" value="Вывести свойство" onclick="LastUser()"></p>
        <p><input type="button" value="Вывести массив" onclick="PrintArray()"></p>

</form>
    
</body>
<script src="/scripts/lab9.js"></script>
</html>