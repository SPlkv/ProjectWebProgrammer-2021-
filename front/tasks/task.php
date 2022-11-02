<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Лаб7</title>

</head>
<body class="body body__wrapper">
    <form class>
        <input class="btn" type="button" onclick="Add()" value="Нажми сюда">
        <textarea id="textarea" placeholder="Тут что-то будет"></textarea>     
    </form>
    <form class="taskform">
        <textarea id="taskform__textarea-a" onkeypress="return isNumberKey(event)" placeholder="Поле1"></textarea> 
        <textarea id="taskform__textarea-b" onkeypress="return isNumberKey(event)" placeholder="Поле2"></textarea> 
        <input class="taskform__btn" type="button" onclick="Sum()" value="Отправить">

    </form>
    
</body>
<script src="/scripts/task.js"></script>
</html>