<?php

$dbhost = "localhost";
$dbname = "vyazhu_articles";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Получение всех статей
function get_videocards_all() {
    global $db;
    $videocards = $db->query("SELECT * FROM singles");
    return $videocards;
}