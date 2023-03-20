<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'loftschool-lessons-mysql';
$port = 3306;

// Проверить подключена ли mysqli
$mysql = new mysqli($host,$user,$password,$dbname,$port);
// Проверка успешного подключения
if (mysqli_connect_errno()) {
    echo 'Connection error ' . mysqli_connect_error();
    die;
}

// ** select
$ret = $mysql->query("SELECT * FROM users ORDER BY id DESC LIMIT 5"); // Вернет обьект содержащий данные о выборке
$data = $ret->fetch_all(); // Получить данный из обьекта выборки ($ret)

echo '<pre>';
var_dump($data);
echo '</pre>';

die;

// insert
$ret = $mysql->query("INSERT INTO users (`name`, `about`, `gender`, `birthday`, `city`)
                                VALUES ('Bob', 'noob', 1, '2000-11-11', '10')");
if (!$ret) { // Проверка что завпрос выполился
    echo "query error " . $mysql->error; // вывести ошибки mysql
}
