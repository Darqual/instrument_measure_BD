<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
require_once 'connection.php'; // подключаем скрипт

?>
<table border='1'>
  <tr>
    <td>ФИО</td>
    
    <td>Возраст</td>
<td>Электронная почта</td>
<td>Номер телефона</td>
<td>Должность</td>

  </tr>
  <?php

    $sql = mysqli_query($link, "SELECT `Испытатели`.`name`, `Испытатели`.`age`,`Испытатели`.`post`, `Испытатели`.`phone`, `Испытатели`.`email` FROM `Испытатели` WHERE `Испытатели`.`post` = '$post'") or die("Ошибка " . mysqli_error($link)); 

  while ($result = mysqli_fetch_array($sql)) {

      echo "<tr><td>{$result['name']}</td><td>{$result['age']} </td><td>{$result['email']} </td><td>{$result['phone']} </td><td>{$result['post']} </td></tr>";
    
}
  ?>

</table>

</body>
</html>
