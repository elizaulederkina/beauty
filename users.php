<?php
include SITE_ROOT . "/db.php";

$errMsg = [];

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];

   
}

$users = selectAll('users');

// Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логин должен быть более 2-х символов");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Пароли в обеих полях должны соответствовать!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
       if($existence['email'] === $email){
           array_push($errMsg, "Пользователь с такой почтой уже зарегистрирован!");
       }
       else{
           $pass = password_hash($passF, PASSWORD_DEFAULT);
          $post = [
              
               'username' => $login,
               'email' => $email,
               'password' => $pass
           ];
          $id = insert('users', $post);
          $user = selectOne('users', ['id' => $id] );
           userAuth($user);
       }
    }
}else{
    $login = '';
    $email = '';
}

// Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        array_push($errMsg, "Не все поля заполнены!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            array_push($errMsg, "Почта либо пароль введены неверно!");
        }
    }
}else{
    $email = '';
}

