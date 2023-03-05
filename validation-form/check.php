<?php
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $secondpass = filter_var(trim($_POST['secondpass']), FILTER_SANITIZE_STRING);

    if($pass != $secondpass) {
        echo "Пароли не совпадают";
        exit();
    }

    $pass = md5($pass."lfs8ad7jf32sjdfkkf232sdj");

    $mysql = new mysqli('localhost', 'root', '', 'vyazhu_articles', '3306');
    $mysql->query("INSERT INTO `users` (`email`, `pass`) VALUES('$login', '$pass')");

    $mysql->close();

    header('Location: ../index.php');

?>