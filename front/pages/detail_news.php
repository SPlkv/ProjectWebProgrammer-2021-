<?php
session_start();
$id  = $_REQUEST['id'];


require_once '../front/includes/connect.php';
$db = DataBase::getDB();
$news=$db->select("SELECT * FROM `news` WHERE `id`= {?}", array($id));
foreach($news as $item)
    // print_r($item);
?>

<body>
    <form >
        <p>Название статьи:<?=$item['Title']?></p>
        <p>Текст статьи:<?=$item['Text']?></p>
    </form>
</body>

