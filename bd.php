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

// Получение статьи по ее id
function get_videocard_by_id($id) {
    global $db;
    $videocards = $db->query("SELECT * FROM singles WHERE id = $id");
    foreach ($videocards as $videocard) {
        return $videocard;
    }
}