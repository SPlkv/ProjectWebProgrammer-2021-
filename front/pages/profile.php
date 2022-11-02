<?php
session_start();
$page->setPageTitle('Профиль');
 if(!$_SESSION['user'])
    header('Location: /signin');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Logo</title>
</head>
<body> 

<h2> email: <?= $_SESSION['user']['email']?></h2>
<h2> login: <?= $_SESSION['user']['login']?></h2>
<a href="includes/logout.php" class="logout">Выход</a>

</body>

</html>