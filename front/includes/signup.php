<?php
session_start();
require_once '../includes/connect.php';
$page->setPageTitle('Регистрация');
$db = DataBase::getDB();

$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];
$hash = md5($email . time());


if ($password == $passwordRepeat)      //проверка на совпадение пароля
{
    $password=md5($password);
    $query = "INSERT INTO `users`(`id`, `email`, `password`, `login`,`hash`) VALUES (NULL,'$email','$password','$login','$hash')"; //добавление в базу данных при помощи 
    $db->query($query, array());
    header('Location: /signin'); //редирект на вход
} else {
    $_SESSION['message'] = "Пароли не совпадают"; //задаем переменной 
    header('Location: /signup'); //редирект на ту же
}
