<?php
session_start();
$page->setPageTitle('Регистрация');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <title>Sign up</title>
</head>
<body>
    <div>
        <div class="main-page">
            <h1 class="headline"><a href="../index.php" class="main-page__link_active">На главную</a></h1>
        </div>
        <form action = "../includes/signup.php" method="POST">
            <div class="container">
                <h1 class="headline">Регистрация</h1>
                <p>Заполните форму</p>
                <hr class="line">

                <label class="container__label" for="email"><b>Логин</b></label>
                <input class="container__input" type="text" name="login" required>

                <label class="container__label" for="email"><b>Адрес электронной почты</b></label>
                <input class="container__input" type="text" name="email" required>
                ​
                <label class="container__label" for="psw"><b>Пароль</b></label>
                <input class="container__input" type="password" name="password" required>
                ​
                <label class="container__label" for="psw-repeat"><b>Повторите пароль</b></label>
                <input class="container__input" type="password"  name="passwordRepeat" required>
                <hr class="line">
                <div class ="container__item">
                    <button type="submit" class="container__item__registerbtn">Зарегистрироваться</button>
                </div>
                
                    <?php       //если сессия существует, выводится значение и удаляется
                      if($_SESSION['message'])
                      {
                        echo'<span>'. $_SESSION['message'] .'</span>';
                      }
                      unset($_SESSION['message']);
                    ?>
                    
                <div class="signin">
                    <p>Уже имеется аккаунт?<a href="signin.php"> Sign in</a>.</p>
                </div>
            </div>

        </form>
    </div>
      ​
</body>
</html>