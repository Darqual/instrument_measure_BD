<?php
$host = 'localhost'; // адрес сервера 
$database = 'a0642704_measure_bd'; // имя базы данных
$user = 'a0642704_measure_bd'; // имя пользователя
$password = 'lolkek1488'; // пароль
// Создаем соединение
$conn = mysqli_connect($host, $user, $password, $database);

// Проверяем соединение

mysqli_close($conn);
?>