<!DOCTYPE html>
<html>
<head>
<title>Добавить условия хранения</title>
<meta charset="utf-8">
</head>
<body>
<h2>База данных Конфеты</h2>
<?php
require_once 'connection.php'; // подключаем скрипт
 session_start(); 
if(isset($_POST['Условия_хранения'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $Условия_хранения = htmlentities(mysqli_real_escape_string($link, $_POST['Условия_хранения']));
    
     if(isset($_POST['button1'])){
    // создание строки запроса
    $query ="INSERT INTO `conditions` VALUES('$Условия_хранения', NULL)";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    unset($_SESSION['Условия_хранения']);
    // закрываем подключение
    mysqli_close($link);
   header("Refresh:0");

   }
}
?>
<h2>Добавить условия хранения</h2>
<form method="POST">
<p>Введите условия хранения:<br> 
<?php
if (isset($_POST['submit'])){
    $_SESSION['Условия_хранения'] = $_POST['Условия_хранения'];
    header("Location: addsweet.php");
}
?>    
    <input type="text" value="<?php echo isset($_SESSION['Условия_хранения']) ? $_SESSION['Условия_хранения'] : ''; ?>" name="Условия_хранения" /></p>

 <input type="submit" value="Добавить" name="button1" />
    <input type="submit" value="Назад" name="submit" />
</form>

</body>
</html>