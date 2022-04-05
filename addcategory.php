<!DOCTYPE html>
<html>
<head>
<title>Добавить СИ</title>
<meta charset="utf-8">
</head>
<body>
<h2>База данных Средства измерения</h2>
<?php
require_once 'connection.php'; // подключаем скрипт
 session_start(); 
if(isset($_POST['Name'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $Name = htmlentities(mysqli_real_escape_string($link, $_POST['Name']));
    $Availability1 = htmlentities(mysqli_real_escape_string($link, $_SESSION['Availability1']));
    if (isset($_POST['Availability1'])){
    $Availability1 = htmlentities(mysqli_real_escape_string($link, $_POST['Availability1']));
}
      $Количество_кг = htmlentities(mysqli_real_escape_string($link, $_POST['Количество_кг']));
     $Описание = htmlentities(mysqli_real_escape_string($link, $_POST['Описание']));
   if(isset($_POST['button1'])){
    // создание строки запроса
    $query ="INSERT INTO `category` VALUES('$Name', NULL, '$Availability1' , '$Количество_кг', '$Описание')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    unset($_SESSION['Name']);
    unset($_SESSION['Availability1']);
    unset($_SESSION['Количество_кг']);
    
    unset($_SESSION['Описание']);
    // закрываем подключение
    mysqli_close($link);
   header("Refresh:0");

   }
}
?>



<h2>Добавить категорию</h2>
<form method="POST">
<p>Введите категорию:<br> 
<?php
if (isset($_POST['submit'])){
    $_SESSION['Name'] = $_POST['Name'];
    header("Location: addsweet.php");
}
?>    
    <input type="text" value="<?php echo isset($_SESSION['Name']) ? $_SESSION['Name'] : ''; ?>" name="Name" />


<p>Укажите доступность:<br> 
<?php
if (isset($_POST['submit'])  && !isset($_SESSION['Availability1'])){
    $_SESSION['Availability1'] = $_POST['Availability1'];
}
if (isset($_POST['submit'])  && isset($_POST['Availability1'])){
    $_SESSION['Availability1'] = $_POST['Availability1'];
}
$db = mysql_connect($host, $user, $password);
mysql_select_db($database, $db);
$query1 = mysql_query("SELECT DISTINCT `Availability` FROM `category`"); 
$rows1 = mysql_num_rows($query1);
echo "<select name=\"Availability1\">";
echo "<option selected value disabled>".$_SESSION['Availability1']."</option>";
for($i=0; $i<$rows1; $i++)
{
$mas1 = mysql_fetch_array($query1);
echo "<option>".$mas1["Availability"]."</option>"; 
}
echo "</select>";
?>


<p>Укажите количество:<br> 
<?php
if (isset($_POST['submit'])){
    $_SESSION['Количество_кг'] = $_POST['Количество_кг'];
}
?>    
    <input type="text" value="<?php echo isset($_SESSION['Количество_кг']) ? $_SESSION['Количество_кг'] : ''; ?>" name="Количество_кг" /></p>

<p>Введите описание:<br> 
<?php
if (isset($_POST['submit'])){
    $_SESSION['Описание'] = $_POST['Описание'];
}
?>    
    <input type="text" value="<?php echo isset($_SESSION['Описание']) ? $_SESSION['Описание'] : ''; ?>" name="Описание" /></p>
<input type="submit" value="Добавить" name="button1" />
<input type="submit" value="Назад" name="submit" />
</form>


</body>
</html>