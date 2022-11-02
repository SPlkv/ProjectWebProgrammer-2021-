<?php
    // $title='Новости';
    session_start();// для глобальный переменной $_session
    require_once '../front/includes/connect.php';
    $page->setPageTitle('Новости');
    
    $db = DataBase::getDB();
    
    $news=$db->select("SELECT * FROM `news`");
    
?>
<p>ГЛАВНЫЕ НОВОСТИ</p>
<main class="products_wrapper">
<div class="products__inner">
            <div class="products">
        
                <?foreach($news as $item)
    {
        ?>
        
                <div class="product<?=$item['id']?>">
                    <a href="/detail_news?id=<?=$item['id']?>"> 
                        <div class="products_content products_content__active">
                            <div class="product_img"></div>
                            
                            <div class="product_label__wrapper">
                                <div class="product_label__title"><?=$item['Title']?></div>
                            </div>
                        </div>
                    </a>
                </div>
                <?}?>
                
            </div>
        </div>
</main>