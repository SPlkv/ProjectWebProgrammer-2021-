<?

require_once '../front/includes/settitle.php';
$page=new Page();
try {

    // берем переданный роут
    $route = trim($_REQUEST['route'] ?? 'index');

    // проверяем, если в конце слеш, то это index роут
    if (substr($route,'-1') == '/'){
        $route.='index';
    }
     
    // минимальная защита от инклуда неожидаемых файлов
    // ограничиваем имена до символов a-b, 0-9, тире, нижнее подчеркивание и слеш
    if (!preg_match('~^[-a-z0-9/_]+$~i', $route)) throw new Exception('Not allowed route');

    // генерим путь к файлу
    $filePath = dirname(__FILE__).'/pages/'.$route.'.php';
    
    // если не существует выкидываем ошибку
    if (!file_exists($filePath)) include dirname(__FILE__).'/pages/404.php';
    //echo '$filePath - '.$filePath;
    // если существует, инклудим файл
    ob_start();
    include $filePath;
    $buffer=ob_get_contents();
    ob_end_clean();
    
    
} catch (Throwable $ex) {
    // в случае любых ошибок, показываем 404
    // тут обычно делают разные типы эксепшенов и разделяют 400 и 500 ошибки
    include dirname(__FILE__).'/pages/error404.php';
}
include 'header.php';
echo $buffer;
include 'footer.php';
?>