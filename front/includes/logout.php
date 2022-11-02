<?php session_start();  //для глобальный переменной $_SESSION
unset($_SESSION['user']);   //удаляем сессию юзера
header('Location: /index'); // редирект на главную страницу