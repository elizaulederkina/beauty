<?php
    include "path.php";
    include "users.php";
?>
<html lang="ru">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Julius+Sans+One&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/a3b09a4d77.js" crossorigin="anonymous"></script>
   <title>GlowLuxe Beauty</title>
</head>
  <body>
    <header class="container-fluid">
<div class="container">
    <div class="row">
            <h1 class="title">GlowLuxe Beauty</h1>
        
    </div>
</div>
</header>

<!-- END HEADER -->
<!-- FORM -->
<div class="container reg_form">
    <form action="reg.php" method="post" class="row justify-content-center">
        <h2 style="text-align: center;">Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
            <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
            <a href="//localhost/сайт/log.php">Войти</a>
        </div><br>
    </form>
</div>
<!-- END FORM -->
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

<!-- footer -->

<!-- // footer -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>