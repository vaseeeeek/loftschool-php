<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'loftschool-lessons-mysql';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

/* Получение информанции о пользователе по id */
//$id  = intval($_GET['id'] ?? 0); /* Intval необходим для исключение ввода в запрос не нужной инофрмации */
//
//if ($id) {
//     $ret = $pdo->query("SELECT * FROM users WHERE id = $id");
//
//     if (!$ret) {
//         print_r($pdo->errorInfo()); die;
//     }
//
//     $user = $ret->fetchAll(PDO::FETCH_ASSOC);
//     echo '<pre>' . print_r($user) . '</pre>';
//}


/* второй вариант(правильный блять и идите нахуй) Получение информанции о пользователе по id */
$id  = intval($_GET['id'] ?? 0); /* Intval необходим для исключение ввода в запрос не нужной инофрмации */

if ($id) {
    $query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $query->execute(['id' => $id]);
    $user = $query->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>' . print_r($user) . '</pre>';
}
