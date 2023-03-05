<?php
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."lfs8ad7jf32sjdfkkf232sdj");

    $mysql = new mysqli('localhost', 'root', '', 'vyazhu_articles');

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if((is_array($user) && count($user))  == 0) {
        echo "Такой пользователь не найден";
        exit();
    }
    
	setcookie('user', $user['email'], time() + 3600, "/");

    $mysql->close();

    header('Location: ../index.php');

    exit();

?>