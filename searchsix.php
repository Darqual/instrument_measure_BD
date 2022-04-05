<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
require_once 'connection.php'; // подключаем скрипт

?>
<?php
echo "<span style='color:blue;'>Наименование эталона: $title_standart</span>"; 

?>
<br>
<?php

echo "<span style='color:blue;'>Статус работы СИ: $status</span>";
?>

<table border='1'>
  <tr>
    <td>Наименование СИ</td>
    
    <td>Наименование эталона</td>
<td>Код ККС</td>
<td>Статус работы СИ</td>
 <td>Время использования эталона</td>
  </tr>
  <?php

    $sql = mysqli_query($link, "SELECT `Средства измерения`.`title_si`, `Эталонное и испытательное оборудование`.`title_standart`,`Средства измерения`.`KKS`, `Средства измерения`.`status`, `Эталонное и испытательное оборудование`.`time_use`
FROM `Эталонное и испытательное оборудование`
LEFT JOIN `Средства измерения` ON `Эталонное и испытательное оборудование`.`ID` = `Средства измерения`.`id_device`
WHERE ((`Средства измерения`.`status` = '$status')AND (`Эталонное и испытательное оборудование`.`title_standart` = '$title_standart'))") or die("Ошибка " . mysqli_error($link)); 

  while ($result = mysqli_fetch_array($sql)) {

      echo "<tr><td>{$result['title_si']}</td><td>{$result['title_standart']} </td><td>{$result['KKS']} </td><td>{$result['status']} </td><td>{$result['time_use']}</td></tr>";
    
}
  ?>

</table>

</body>
</html>
