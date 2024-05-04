<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="catalog.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Julius+Sans+One&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/a3b09a4d77.js" crossorigin="anonymous"></script>
   <title>Catalog</title>
</head>
  <body>
    <header class="header">
           <div class="image-container">
            <img src="картинки/3.1.jpg" alt=" ">
            <div class="text-overlay">
               Каталог
            </div>
         </div>
    </header>

<!--меню-->
    <section class="section section-catalog">
      <div class="container">
         <header class="section_header">
            <nav class="catalog-nav">
               <ul class="catalog-nav__wrapper">
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn is-active" type="button" data-filter="all">Все</button>
               </il>
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn" type="button" data-filter="face">Для лица</button>
               </il>
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn" type="button" data-filter="eyes">Для глаз</button>
               </il>
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn" type="button" data-filter="lips">Для губ</button>
               </il>
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn" type="button" data-filter="hair">Для волос</button>
               </il>
               <il class="catalog-nav_item">
                  <button class="catalog-nav_btn" type="button" data-filter="man">Для мужчин</button>
               </il>
            </ul>
            </nav>
            <hr class="horizontal-line">
            <h2 class="section_title" style="text-align: center;">Бестселлеры</h2>
         </header>

         <div class="catalog">

         <?php 
         $driver = 'mysql';
         $host = 'localhost';
         $db_name = 'catalog';
         $db_user = 'root';
         $db_pass = 'mysql';
         $charset = 'utf8';
         $mysqli = new mysqli('localhost', $db_user, $db_pass, $db_name);
         $query = "set names utf8";
							$mysqli->query($query);
							$query = "select * from products";
							$results = $mysqli->query($query);
         while($row=$results->fetch_assoc()){
            echo '
             <div class="catalog_item" data-category="'.$row["category"].'">
               <div class="product">
               <a href="'.$row["htmlLink"].'">
                  <img src="'.$row["imgFile"].'" alt="" class="product_img"></a>      
               
                  <div class="product=content">
                     <h3 class="product_title">'.$row["name"].'</h3>
                  </div>
               </div>
            </div>
            ';
         }

      
         ?>
           

<!--
            <div class="catalog_item" data-category="face">
               <div class="product">
                  <a href="product_foundation.html">
                  <img src="картинки/каталог 2.jpg" alt="" class="product_img">
               </a>
                  <div class="product=content">
                     <h3 class="product_title">Тональная основа</h3>
                  </div>
               </div>
            </div>


            <div class="catalog_item" data-category="face">
               <div class="product">
                  <a href="product_blusher.html">
                  <img src="картинки/каталог 3.jpg" alt="" class="product_img">
               </a>
                  <div class="product=content">
                     <h3 class="product_title">Румяна</h3>
                  </div>
               </div>
            </div>


            <div class="catalog_item" data-category="eyes">
               <div class="product">
                  <a href="product_shadow.html">
                  <img src="картинки/каталог 4.jpg" alt="" class="product_img">
                  </a>
                  <div class="product=content">
                     <h3 class="product_title">Палетка теней</h3>
                  </div>
               </div>
            </div>

            <div class="catalog_item" data-category="lips">
               <div class="product">
                  <a href="product_lips.html">
                  <img src="картинки/каталог 5.jpg" alt="" class="product_img">
               </a>
                  <div class="product=content">
                     <h3 class="product_title">Средство для ухода за губами</h3>
                  </div>
               </div>
            </div>

            <div class="catalog_item" data-category="hair">
               <div class="product">
                  <a href="product_hair.html">
                  <img src="картинки/каталог 6.jpg" alt="" class="product_img">
               </a>
                  <div class="product=content">
                     <h3 class="product_title">Кондиционер для волос</h3>
                  </div>
               </div>
            </div>

            <div class="catalog_item" data-category="man">
               <div class="product">
                  <a href="product_man.html">
                  <img src="картинки/каталог 7.jpg" alt="" class="product_img">
               </a>
                  <div class="product=content">
                     <h3 class="product_title">Гель-пена для бритья</h3>
                  </div>
               </div>
            </div>
-->
         </div>
      </div>
    </section>

    <!--конец-->  
    <div class="footer container-fluid">
      <div class="footer-content container">
        <div class="row">
          <div class="footer-section about col-md-4 col-12">
            <h3 class="logo-text">GlowLuxe Beauty</h3>
            <div class="contact">
              <span><i class="fas fa-phone"></i> &nbsp; 352-472-462</span>
              <span><i class="fas fa-envelope"></i> &nbsp;  info-luxe@yandex.com</span>
            </div>  
          </div>
  
         <div class="footer-section links col-md-4 col-12">
             <ul>
               <a href="index.html">
                <li>Главная страница</li>
              </a>
              <a href="//localhost/сайт/catalog.php">
                <li>Каталог</li>
              </a>
              <a href="collection.html">
                <li>Коллекции</li>
              </a>
              
              <a href="//localhost/сайт/log.php">
                <li>Личный кабинет</li>
              </a>
              <a href="//localhost/сайт/reg.php">
                <li>Регистрация</li>
              </a>
             </ul> 
          </div>
          <div class="footer-section contact-form col-md col-12">
            <h3>Служба поддержки</h3>
            <p> Телефон: 8 913 457 574 32</p>
            <p>Адрес 123444, г.Москва, ул.Тверская, д.10
              (пн-чт с 9:00 до 18:00)
            </p>
          </div>
        </div>
  
      </div>
  
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="myLib.js"></script>
    <script src="catalog.js"></script>
   </body>
    </html>