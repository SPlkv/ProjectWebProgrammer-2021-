<?
// Подключаем коннект к БД
require_once '../front/includes/connect.php';
$page->setPageTitle('Восстановление пароля');
$db = DataBase::getDB();

function gen_password($length = 6)
{				
	$chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
	$size = strlen($chars) - 1; 
	$password = ''; 
	while($length--) {
		$password .= $chars[random_int(0, $size)]; 
	}
	return $password;
}
// Проверка есть ли хеш
if ($_REQUEST['hash']) {
    // Кладём этот хеш в отдельную переменную 
    $hash = $_REQUEST['hash'];
    // Проверка на то, что есть пользователь с таки хешом
    if ($result = $db->select("SELECT `id` FROM `users` WHERE `hash`={?}",array($hash))) {
        
        // Цикл для получение пользователя с таким хешом
        // while ($row = mysqli_fetch_assoc($result)) {
            // Переменная для пароля
            $pass = gen_password(8);
            $newpass=md5($pass);
            // Обновление пароля
            $db->select("UPDATE `users` SET `password`='$newpass' WHERE `id`={?}");
            // Вывод нового пароля    
            echo "Ваш новый пароль: " . $pass;
        // }
    } else {
        echo "Ошибка";
    }
} else {
    echo "Хеш не найден или не совпал";
}
?>
