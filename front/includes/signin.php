<?php
session_start();// для глобальный переменной $_session
require_once '../includes/connect.php';
$db = DataBase::getDB();
$page->setPageTitle('Вход');
$login = $_POST['login'];
$password = md5($_POST['password']);//хэшируем полученный пароль для 
if($_SESSION['user'])
{
    $_SESSION['message'] = "Вы уже авторизированы!";
    header('Location: /signin');//редирект на вход
}



if($check_user=$db->select("SELECT * FROM `users` WHERE `login` = {?} AND `password` = {?}",array($login,$password)))//ищем пользователя
 {                                                                                                               //в базе
    $user = $check_user;//присваиваем юзеру его данные
    $_SESSION['user'] = [ 
        "id"=>$user[0]['id'],
        "login"=>$user[0]['login'],
        "email"=>$user[0]['email']
    ];
    
    $backurl='/profile';
    if(!empty($_REQUEST['backurl']))
    {
        $backurl = $_REQUEST['backurl'];
    }
    header('Location: '.$backurl);//редирект на профиль 

    
}
else{

    $_SESSION['message'] = "Неверный email или пароль";
    header('Location: /signin');//редирект на вход
}
