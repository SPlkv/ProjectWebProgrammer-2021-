<?php
// Подключаем к БД
require_once '../front/includes/connect.php';
$page->setPageTitle('Восстановление пароля');
$db = DataBase::getDB();

// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['doGo'])) {
    // Проверка что email введён
    if ($_REQUEST['email']) {
        $email = $_REQUEST['email'];

        // хешируем хеш, который состоит из email и времени
        $hash = md5($email . time());

        // Переменная $headers нужна для Email заголовка
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <$email>\r\n";
        $headers .= "From: <mail@example.com>\r\n";
        // Сообщение для Email
        $message = '
                <html>
                <head>
                <title>Подтвердите Email</title>
                </head>
                <body>
                <p>Чтобы восстановить пароль перейдите по <a href="http://example.com/newpass?hash=' . $hash . '">ссылке</a></p>
                </body>
                </html>
                ';

        // Меняем хеш в БД
        $query="UPDATE `users` SET `hash`='$hash' WHERE `email`='$email'";

        $db->query($query, array());
        // проверка отправилась ли почта
        if (mail($email, "Восстановление пароля через Email", $message, $headers)) {
            // Если да, то выводит сообщение
            echo 'Ссылка для восстановления пароля отправлена на вашу почту';
        } else {
            echo 'Произошла ошибка, письмо не отправилось';
        }
    } else {
        // Если ошибка есть, то выводить её 
        echo "Вы не ввели Email";
    }
}


?>


<body>
    <form  method="post">
        <p>Введите ваш email: <input type="email" name="email"></p>
        <p ><input type="submit" value="Отправить" name="doGo"></p>
    </form>
</body>

</html>

</html>