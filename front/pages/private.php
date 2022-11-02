<?php
session_start();
$page->setPageTitle('Приватная страница');
if(!$_SESSION['user'])
{ 
    header('Location: /signin?backurl='.$_SERVER["REQUEST_URI"]);
}

?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="../css/style.css" rel="stylesheet" type="text/css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>

</head>
<body class="body body__wrapper">
    <header class="header">
            <div class="header__inner">
                    <nav class="menu">
                        
                        <ul class="menu__list">
                            <img class="menu__logo" src="https://uploads.turbologo.com/uploads/design/hq_preview_image/687655/draw_svg20210507-22909-4je243.svg.png">
                            <li class="menu__item"><a href="#" class="menu__link  menu__link_active">Main menu</a></li>
                            <li class="menu__item"><a href="#" class="menu__link menu__link_active">News</a></li>
                            
                        </ul> 
                    </nav>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item"><a href="login/signin.php"  class="menu__link menu__link_active">Come in</a></li>
                            <li class="menu__item"><a href="login/signup.php"  class="menu__link menu__link_active">Registration</a></li> 
                            <li class="menu__item"><a href="profile.php"  class="menu__link menu__link_active">Profile</a></li>                         
                        </ul> 
                    </nav>
                </div>
            </div>
    </header> -->
    <main class="products_wrapper">
        <div>
            Страница для авторизованных пользователей
        </div>
        <a href="../includes/logout.php" class="logout">Выход</a>
    </main>
    <!-- <footer class="footer">
        <div class="footer__title">FOOTER</div>
    </footer> -->

</body>
</html>