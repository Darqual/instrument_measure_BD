<?php
        require_once "connect.php";
        session_start();
        if (isset($_POST['submit7'])){
           header("Location: ownerMenu.php");
        } 
        if (isset($_POST['submit6'])){
         header("Location: receiptNameMenu.php");
      } 
      if (isset($_POST['submit5'])){
         header("Location: buildingMenu.php");
      } 
      if (isset($_POST['submit4'])){
         header("Location: roomMenu.php");
      } 
        if (isset($_POST['submit1'])){
            include "addAccount.php";
            header('Location: temp.php');
            session_unset();
            session_destroy();
        } 
        /*if (isset($_POST['owners'])){
         setcookie("owners", $_POST['owners']);
      }*/
         
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ЖКХ</title>
    <style>
      .saitbar {
         margin: 0;
         padding: 0;
         width: 290px;
         }
         .saitbar1 {
         top: 6%;
         left: 18%;
         margin: 0;
         padding: 0;
         width: 250px;
         }
         .saitbar2 {
         top: 13%;
         left: 9%;
         margin: 0;
         padding: 0;
         width: 415px;
         }
         .saitbar3 {
         top: 20%;
         left: 13%;
         margin: 0;
         padding: 0;
         width: 340px;
         }
      .menu-4, .menu-4 .podmenu, .menu-4 .podmenu-2 {
         margin: 0;
         padding: 0;
         background-color: #fff;
         height: auto;
         list-style-type: none;
         }
      .menu-4 li {
         margin: 0 0 2px;
         padding: 0;
         background-color: #5f2f02;
         border-left: 12px solid rgb(190, 221, 255);
         transition: all 0.5s ease 0s;
         display: block;
         position: relative;
         }
      .menu-4 a {
         padding: 6px 0 8px 10px;
         color: #f2f2f2;
         text-decoration: none;
         border-left: 6px solid SlateGray;
         transition: all 0.5s ease 0s;
         display: block;
         }
         .menu-4 li:hover {
         background-color: #7e4421;
         }
      .menu-4 li:hover a {
         color: rgb(255, 255, 255);
         padding: 6px 0 8px 22px;
         border-left: 6px solid #ffffff;
         }
      .menu-4 ul.podmenu, .menu-4 ul.podmenu-2 {
         display: none;
         position: absolute;
         top: 0;
         width: 150px;
         background-color: #ccc;
         }
      .menu-4 ul.podmenu {
         left: 279px;
         }
      .menu-4 ul.podmenu-2 {
         left: 150px;
         }
      .menu-4 li:hover .podmenu, .podmenu li:hover .podmenu-2 {
         display: block;
         padding: 4px 0 4px 14px;
         }
      .menu-4 .podmenu li, .podmenu .podmenu-2 li {
         margin: 0;
         padding: 0;
         background-color: #ccc;
         border-left: 0 solid #273ed9;
         transition: all 0.6s ease 0s;
         display: block;
         }
      .menu-4 .podmenu li a, .podmenu .podmenu-2 li a {
         border-left: 0 solid #900000;
         padding: 4px 10px;
         color: #444;
         font-size: 14px;
         border-bottom: 1px solid #999;
         }
      .menu-4 .podmenu li a:hover, .podmenu .podmenu-2 li a:hover {
         color: #fff;
         }
    table.chart{
        width: 80%;
    	  border-collapse:collapse;
        border-spacing:0;
        height: auto;
    }

    table.chart,table.chart td, table.chart th {
    	border: 1px solid #595959;
    }
    table.chart td,table.chart th {
    	padding: 2px;
    	width: 30px;
    	height: 35px;
    }
    table.chart th {
    	background: #5f2f02; 
    	color: white; 
    	font-weight: normal;
    }
   .iksweb{display: inline-block;cursor: pointer; font-size:14px;text-decoration:none;padding:6px 20px; color:#ffffff;background:#5f2f02;border-radius:0px;border:0px solid #354251;}
   .iksweb:hover{background:#5f2f02;color:#ffffff;border:0px solid #354251;transition: all 0.2s ease;}
    </style>
</head>
<body>
    <div>
        <h2>ПРОСМОТР И ДОБАВЛЕНИЕ КВИТАНЦИЙ</h2>
    </div>

    <form name="new_account" method="post">
    <p>Владелец квитанции:
        <select name="owners">
        <?php
             if(isset($_POST['owners'])){
               $_SESSION['owners'] = $_POST['owners'];
           }
               echo "<option selected>".$_SESSION['owners']."</option>"; 
               echo "<option disabled></option>";

         ?>
            <?php
                $owners = mysqli_query($connect, "SELECT * FROM `Владелец лицевого счета`");
                $owners = mysqli_fetch_all($owners);
                foreach($owners as $owner){
                ?>
                <option><?=$owner[0]?></option>
                <?php
                }
            ?>
         </select>
         <input type="submit" value="Добавить владельца" name="submit7"/>
    </p>
    
    <p>Дом:
        <select name="buildings">
        <?php
             if(isset($_POST['buildings'])){
               $_SESSION['buildings'] = $_POST['buildings'];
           }
           if(!isset($_POST['submit1'])){
               echo "<option selected>".$_SESSION['buildings']."</option>"; 
               echo "<option disabled></option>";
           }
          /*if(isset($_POST['submit1'])){
               echo "<option disabled></option>";
           }*/
         ?>
            <?php
                $owners = mysqli_query($connect, "SELECT * FROM `Дома`");
                $owners = mysqli_fetch_all($owners);
                foreach($owners as $owner){
                ?>
                <option><?=$owner[0]?></option>
                <?php
                }
            ?>
         </select>
         <input type="submit" value="Добавить дом" name="submit5"/>
    </p>
    <p>Квартира:
        <select name="rooms">       
            <?php
             if(isset($_POST['rooms'])){
               $_SESSION['rooms'] = $_POST['rooms'];
           }
               echo "<option selected>".$_SESSION['rooms']."</option>"; 
               echo "<option disabled></option>";

            ?>
            <?php
                $owners = mysqli_query($connect, "SELECT * FROM `Квартиры`");
                $owners = mysqli_fetch_all($owners);
                foreach($owners as $owner){
                ?>
                <option><?=$owner[0]?></option>
                <?php
                }
            ?>
         </select>
         <input type="submit" value="Добавить квартиру" name="submit4"/>
    </p>
    <p>Наименование услуги:
        <select name="receipt_name">       
            <?php
             if(isset($_POST['receipt_name'])){
               $_SESSION['receipt_name'] = $_POST['receipt_name'];
           }
               echo "<option selected>".$_SESSION['receipt_name']."</option>"; 
               echo "<option disabled></option>";

            ?>
            <?php
                $owners = mysqli_query($connect, "SELECT * FROM `Наименование услуги`");
                $owners = mysqli_fetch_all($owners);
                foreach($owners as $owner){
                ?>
                <option><?=$owner[0]?></option>
                <?php
                }
            ?>
         </select>
         <input type="submit" value="Добавить услугу" name="submit6"/>
    </p>
   <p>Тариф: <input type="text" size="20" name="tarif"></p>
   <p>Расход: <input type="text" size="20" name="waste"> </p>
    <p>Дата выставления: <input type="date" value="<?php
            if(isset($_POST["date"])){
                $_SESSION["date"] = $_POST["date"];
            }
            if(isset($_SESSION["date"]))
                echo $_SESSION["date"];
        ?>" name="date" >

   </p>
   <p>Своевременность:
          <select name="relevance">
                <option selected disabled></option>
                <option>Да</option>
                <option>Нет</option>
                </select>
   </p>
    <input type="submit" value="Добавить" name="submit1"/><br><br>
    <div class = "saitbar">
        <ul class = "menu-4">
            <li><a href="index.php">В главное меню</a></li>
        </ul>
    </div>

    <table class = "chart">
         <tr>
            <th>Владелец квитанции</th>
            <th>Дом</th>
            <th>Квартира</th>
            <th>Наименование услуги</th>
            <th>Тариф</th>
            <th>Расход</th>
            <th>Дата выставления</th>
            <th>Своевременность</th>
         </tr>
         <?php
            $accounts = mysqli_query($connect, "SELECT * FROM `Квитанции` ORDER BY `Квитанции`.`Код` DESC");
            $accounts = mysqli_fetch_all($accounts);
            foreach ($accounts as $account){
               ?>
                  <tr>
                     <td><?=$account[1]?></td>
                     <td><?=$account[2]?></td>
                     <td><?=$account[3]?></td>
                     <td><?=$account[4]?></td>
                     <td><?=$account[5]?></td>
                     <td><?=$account[6]?></td>
                     <td><?php
                     for ($i=0; $i<10;$i++){
                        echo $account[7][$i];
                     }
                     ?></td>
                     <td><?=$account[8]?></td>
                  </tr>
                  <?php
            }
         ?>
    </table>
</html>