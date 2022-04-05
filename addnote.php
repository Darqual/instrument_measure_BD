<?php
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'connection.php'; // подключаем скрипт


if (isset($_POST['title'])) {
    

    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

  
  
    
    $title = htmlentities(mysqli_real_escape_string($link, $_SESSION['title']));
    if (isset($_POST['title'])){
        $title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
    }

    // экранирования символов для mysql
    $title_si = htmlentities(mysqli_real_escape_string($link, $_SESSION['title_si']));
    if (isset($_POST['title_si'])){
        $title_si = htmlentities(mysqli_real_escape_string($link, $_POST['title_si']));
    }
    $title = htmlentities(mysqli_real_escape_string($link, $_SESSION['title']));
    if (isset($_POST['title'])){
        $title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
    }
    $KKS = htmlentities(mysqli_real_escape_string($link, $_SESSION['KKS']));
    if (isset($_POST['KKS'])){
        $KKS = htmlentities(mysqli_real_escape_string($link, $_POST['KKS']));
    }
    $number_FIF = htmlentities(mysqli_real_escape_string($link, $_SESSION['number_FIF']));
    if (isset($_POST['number_FIF'])){
        $number_FIF = htmlentities(mysqli_real_escape_string($link, $_POST['number_FIF']));
    }
    
    
    $installation_location = htmlentities(mysqli_real_escape_string($link, $_SESSION['installation_location']));
    if (isset($_POST['installation_location'])){
        $installation_location = htmlentities(mysqli_real_escape_string($link, $_POST['installation_location']));
    }
    $power_unit_numbers = htmlentities(mysqli_real_escape_string($link, $_SESSION['power_unit_numbers']));
    if (isset($_POST['power_unit_numbers'])){
        $power_unit_numbers = htmlentities(mysqli_real_escape_string($link, $_POST['power_unit_numbers']));
    }
    $type_designation_si = htmlentities(mysqli_real_escape_string($link, $_SESSION['type_designation_si']));
    if (isset($_POST['type_designation_si'])){
        $type_designation_si = htmlentities(mysqli_real_escape_string($link, $_POST['type_designation_si']));
    }
    $type_description = htmlentities(mysqli_real_escape_string($link, $_SESSION['type_description']));
    if (isset($_POST['type_description'])){
        $type_description = htmlentities(mysqli_real_escape_string($link, $_POST['type_description']));
    }
    $verification_procedure = htmlentities(mysqli_real_escape_string($link, $_SESSION['verification_procedure']));
    if (isset($_POST['verification_procedure'])){
        $verification_procedure = htmlentities(mysqli_real_escape_string($link, $_POST['verification_procedure']));
    }
    $measurement_methodology = htmlentities(mysqli_real_escape_string($link, $_SESSION['measurement_methodology']));
    if (isset($_POST['measurement_methodology'])){
        $measurement_methodology = htmlentities(mysqli_real_escape_string($link, $_POST['measurement_methodology']));
    }
    $type_information_si = htmlentities(mysqli_real_escape_string($link, $_SESSION['type_information_si']));
    if (isset($_POST['type_information_si'])){
        $type_information_si = htmlentities(mysqli_real_escape_string($link, $_POST['type_information_si']));
    }
    $status = htmlentities(mysqli_real_escape_string($link, $_SESSION['status']));
    if (isset($_POST['status'])){
        $status = htmlentities(mysqli_real_escape_string($link, $_POST['status']));
    }
    $term_certificate = htmlentities(mysqli_real_escape_string($link, $_SESSION['term_certificate']));
    if (isset($_POST['term_certificate'])){
        $term_certificate = htmlentities(mysqli_real_escape_string($link, $_POST['term_certificate']));
    }
    $principle_operation = htmlentities(mysqli_real_escape_string($link, $_SESSION['principle_operation']));
    if (isset($_POST['principle_operation'])){
        $principle_operation = htmlentities(mysqli_real_escape_string($link, $_POST['principle_operation']));
    }
    $type_of_measured_value = htmlentities(mysqli_real_escape_string($link, $_SESSION['type_of_measured_value']));
    if (isset($_POST['type_of_measured_value'])){
        $type_of_measured_value = htmlentities(mysqli_real_escape_string($link, $_POST['type_of_measured_value']));
    }
    $automatic_or_automated = htmlentities(mysqli_real_escape_string($link, $_SESSION['automatic_or_automated']));
    if (isset($_POST['automatic_or_automated'])){
        $automatic_or_automated = htmlentities(mysqli_real_escape_string($link, $_POST['automatic_or_automated']));
    }
    $position_measuring_system = htmlentities(mysqli_real_escape_string($link, $_SESSION['position_measuring_system']));
    if (isset($_POST['automatic_or_automated'])){
        $position_measuring_system = htmlentities(mysqli_real_escape_string($link, $_POST['position_measuring_system']));
    }
    $id_interval = htmlentities(mysqli_real_escape_string($link, $_SESSION['id_interval']));
    if (isset($_POST['id_interval'])){
        $id_interval = htmlentities(mysqli_real_escape_string($link, $_POST['id_interval']));
    }
    $id_responsible = htmlentities(mysqli_real_escape_string($link, $_SESSION['id_responsible']));
    if (isset($_POST['id_responsible'])){
        $id_responsible = htmlentities(mysqli_real_escape_string($link, $_POST['id_responsible']));
    }
    $id_device = htmlentities(mysqli_real_escape_string($link, $_SESSION['id_device']));
    if (isset($_POST['id_device'])){
        $id_device = htmlentities(mysqli_real_escape_string($link, $_POST['id_device']));
    }
    $id_manufact_device = htmlentities(mysqli_real_escape_string($link, $_SESSION['id_manufact_device']));
    if (isset($_POST['id_manufact_device'])){
        $id_manufact_device = htmlentities(mysqli_real_escape_string($link, $_POST['id_manufact_device']));
    }
    $id_manufact_si = htmlentities(mysqli_real_escape_string($link, $_SESSION['id_manufact_si']));
    if (isset($_POST['id_manufact_si'])){
        $id_manufact_si = htmlentities(mysqli_real_escape_string($link, $_POST['id_manufact_si']));
    }

    if (isset($_POST['button1'])){
        // создание строки запроса
     
        $query = "INSERT INTO `Средства измерения` (`ID_SI`, `title_si`, `KKS`, `number_FIF`, `installation_location`, `power_unit_numbers`, `type_designation_si`, `type_description`, `verification_procedure`, `measurement_methodology`, `type_information_si`, `status`, `term_certificate`, `principle_operation`, `type_of_measured_value`, `automatic_or_automated`, `position_measuring_system`, `Id_interval`, `Id_responsible`, `Id_device`, `Id_manufact_device`, `Id_manufact_si`, `title_aes`) VALUES(NULL , '$title','$KKS' ,'$number_FIF', '$title_aes', '$installation_location' ,'$power_unit_numbers' ,'$type_designation_si' ,'$type_description' ,'$verification_procedure' ,'$measurement_methodology' ,'$type_information_si' ,'$status' ,'$term_certificate' ,'$principle_operation' ,'$type_of_measured_value' ,'$automatic_or_automated','$position_measuring_system',NULL,NULL,NULL,14,NULL,NULL )";
        $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
      
        if ($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }
        unset($_SESSION['title']);
        unset($_SESSION['title_si']);
        unset($_SESSION['KKS']);
        unset($_SESSION['number_FIF']);
        unset($_SESSION['installation_location']);
        unset($_SESSION['power_unit_numbers']);
        unset($_SESSION['type_designation_si']);
        unset($_SESSION['type_description']);
        unset($_SESSION['verification_procedure']);
        unset($_SESSION['measurement_methodology']);
        unset($_SESSION['type_information_si']);
        unset($_SESSION['status']);
        unset($_SESSION['term_certificate']);
        unset($_SESSION['principle_operation']);
        unset($_SESSION['type_of_measured_value']);
        unset($_SESSION['automatic_or_automated']);
        unset($_SESSION['position_measuring_system']);
        unset($_SESSION['id_responsible']);
        unset($_SESSION['id_device']);
        unset($_SESSION['id_manufact_device']);
        unset($_SESSION['id_manufact_si']);
        // закрываем подключение
        mysqli_close($link);
        
    }
}

if (
    isset($_POST['submit1']) ||
    isset($_POST['submit2']) ||
    isset($_POST['submit3']) ||
    isset($_POST['submit4']) ||
    isset($_POST['submit5']) ||
    isset($_POST['submit6']) ||
    isset($_POST['submit7']) ||
    isset($_POST['submit8']) ||
    isset($_POST['submit9']) ||
    isset($_POST['submit10']) ||
    isset($_POST['submit11']) ||
    isset($_POST['submit12']) ||
    isset($_POST['submit13']) ||
    isset($_POST['submit15']) ||
    isset($_POST['submit14']) ||
    isset($_POST['submit43']) 
) {
    if (!isset($_SESSION['title']) || isset($_POST['title'])) {
        $_SESSION['title'] = $_POST['title'];
    }
    if (!isset($_SESSION['title_si']) || isset($_POST['title_si'])) {
        $_SESSION['title_si'] = $_POST['title_si'];
    }
    if (!isset($_SESSION['KKS']) || isset($_POST['KKS'])) {
        $_SESSION['KKS'] = $_POST['KKS'];
    }

    if (!isset($_SESSION['number_FIF']) || isset($_POST['number_FIF'])) {
        $_SESSION['number_FIF'] = $_POST['number_FIF'];
    }
    if (!isset($_SESSION['installation_location']) || isset($_POST['installation_location'])) {
        $_SESSION['installation_location'] = $_POST['installation_location'];
    }

    if (!isset($_SESSION['power_unit_numbers']) || isset($_POST['power_unit_numbers'])) {
        $_SESSION['power_unit_numbers'] = $_POST['power_unit_numbers'];
    }

    if (!isset($_SESSION['type_designation_si']) || isset($_POST['type_designation_si'])) {
        $_SESSION['type_designation_si'] = $_POST['type_designation_si'];
    }
    if (!isset($_SESSION['type_description']) || isset($_POST['type_description'])) {
        $_SESSION['type_description'] = $_POST['type_description'];
    }
    
    if (!isset($_SESSION['verification_procedure']) || isset($_POST['verification_procedure'])) {
        $_SESSION['verification_procedure'] = $_POST['verification_procedure'];
    }

    if (!isset($_SESSION['measurement_methodology']) || isset($_POST['measurement_methodology'])) {
        $_SESSION['measurement_methodology'] = $_POST['measurement_methodology'];
    }

    if (!isset($_SESSION['type_information_si']) || isset($_POST['type_information_si'])) {
        $_SESSION['type_information_si'] = $_POST['type_information_si'];
    }
    
    if (!isset($_SESSION['status']) || isset($_POST['status'])) {
        $_SESSION['status'] = $_POST['status'];
    }
    if (!isset($_SESSION['term_certificate']) || isset($_POST['term_certificate'])) {
        $_SESSION['term_certificate'] = $_POST['term_certificate'];
    }
    if (!isset($_SESSION['principle_operation']) || isset($_POST['principle_operation'])) {
        $_SESSION['principle_operation'] = $_POST['principle_operation'];
    }
    if (!isset($_SESSION['type_of_measured_value']) || isset($_POST['type_of_measured_value'])) {
        $_SESSION['type_of_measured_value'] = $_POST['type_of_measured_value'];
    }
    if (!isset($_SESSION['automatic_or_automated']) || isset($_POST['automatic_or_automated'])) {
        $_SESSION['automatic_or_automated'] = $_POST['automatic_or_automated'];
    }
    if (!isset($_SESSION['id_interval']) || isset($_POST['id_interval'])) {
        $_SESSION['id_interval'] = $_POST['id_interval'];
    }
    if (!isset($_SESSION['id_responsible']) || isset($_POST['id_responsible'])) {
        $_SESSION['id_responsible'] = $_POST['id_responsible'];
    }
    if (!isset($_SESSION['id_device']) || isset($_POST['id_device'])) {
        $_SESSION['id_device'] = $_POST['id_device'];
    }
    if (!isset($_SESSION['id_manufact_device']) || isset($_POST['id_manufact_device'])) {
        $_SESSION['id_manufact_device'] = $_POST['id_manufact_device'];
    }
    if (!isset($_SESSION['id_manufact_si']) || isset($_POST['id_manufact_si'])) {
        $_SESSION['id_manufact_si'] = $_POST['id_manufact_si'];
    }

}

if (isset($_POST['submit1'])) {
   header("Location: ./addorder.php");
   exit;
}
if (isset($_POST['submit2'])) {
   header("Location: ./adddevice.php");
   exit;
}
if (isset($_POST['submit6'])) {
   header("Location: ./newmanufacture.php");
   exit;
}
if (isset($_POST['submit8'])) {
   header("Location: ./addsititle.php");
   exit;
}
if (isset($_POST['submit9'])) {
   header("Location: ./addnumpb.php");
   exit;
}
if (isset($_POST['submit10'])) {
   header("Location: ./addtis.php");
   exit;
}
if (isset($_POST['submit11'])) {
   header("Location: ./addstatussi.php");
   exit;
}
if (isset($_POST['submit12'])) {
   header("Location: ./addprdo.php");
   exit;
}
if (isset($_POST['submit13'])) {
   header("Location: ./addviv.php");
   exit;
}
if (isset($_POST['submit15'])) {
   header("Location: ./addmandev.php");
   exit;
}
if (isset($_POST['submit14'])) {
   header("Location: ./addmansi.php");
   exit;
}
if (isset($_POST['submit43'])) {
   header("Location: ./addaes.php");
   exit;
}






?><!DOCTYPE html>
<html lang = "en">
<head>
<title>База данных Средства измерения</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style4.css">

</head>
<body>
	<header> 
	<h1 class = "title">Метрологическая база знаний</h1>
	<h2 class = "title">Добавить запись</h2>
	
	    <nav>
			    <ul>
			        <li><a href="index.html">Главная</a></li>
			        <li><a href="#">База знаний</a>
			            <ul>
			                 <li><a href="allaes.html">АЭС России</a></li>
			                 <li><a href="anekdots.html">Физики шутят</a></li>
			                 <li><a href="workaes.html">Как это работает?</a></li>
			                 <li><a href="peopls.html">Исторические личности</a></li>
			                 <li><a href="future.html">Наше будущее</a></li>
			            </ul>
			        </li>
			        <li><a href="dev.html">Приборы</a></li>
			          <li><a href="services.html">Сервисы</a></li>
			          <li><a href="rss.php">Rss</a></li>
			        <li><a href="#">База данных</a>
			             <ul>
			                 <li><a href="addnote.php">Ввод</a></li>
			                <li><a href="searchcount.php">Статистика</a></li>
			                <li><a href="#">Поиск</a>
    			                 <ul>
    			                    <li><a href="searchmens.php">По должности</a></li>
    			                    <li><a href="searchsi.php">По СИ</a></li>
    			                 </ul>
    			                 </li>
    			         
			            </ul>
			            <li><a href="contakts.html">Контакты</a></li>
    			         <li><a href="xml.php">XML</a></li>
    			         <li><a href="who.php">Кто такой метролог?</a></li>
    			         <li><a href="sss.html">Ссылки</a></li>
    			         <li><a href="stat.html">Гости</a></li>
			        </li>
			      
			    </ul>
			    <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;http://a0642704.xsph.ru&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:12,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Yandex Site Search #2572664&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2572664,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:null,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2572664"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
        <div id="ya-site-results" data-bem="{&quot;tld&quot;: &quot;ru&quot;,&quot;language&quot;: &quot;ru&quot;,&quot;encoding&quot;: &quot;&quot;,&quot;htmlcss&quot;: &quot;1.x&quot;,&quot;updatehash&quot;: true}"></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>
			</nav>
		

	</header>

<section class = "main">
    
    <form method="post" action="">


    <p>Выберите наименование СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['title'] = $_POST['title'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query30 = mysqli_query($db, "SELECT DISTINCT `title` FROM `Наименования СИ` ORDER BY `title`")){
        $rows30 = mysqli_num_rows($query30);
    }
    
    echo "<select select id=\"eid\" name=\"title_si\">";
    echo "<option selected value disabled>".$_SESSION['title_si']."</option>";
    for($i=0; $i<$rows30; $i++)
    {
    $mas30 = mysqli_fetch_array($query30);

    echo "<option>".$mas30["title"]."</option>"; 
    }
    
    echo "</select>";
    ?>
    <input type="submit" value="Добавить наименование" class = "add3" name="submit8"/>
    </p>
    
    <p>Введите код ККС (пример: 20UJA14CT007):  
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['KKS'] = $_POST['KKS'];
        }
        ?>    
    <input type="text" id="swid" value="<?php echo isset($_SESSION['KKS']) ? $_SESSION['KKS'] : ''; ?>" name="KKS" /></p>
    
    <p>Введите номер в ФИФ (пример: 82964-21):    
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['number_FIF'] = $_POST['number_FIF'];
        }
        ?>    
    <p><input type="text" style="width: 200px; height: 25px;" id="qid" class="mask-phone form-control" placeholder="Номер ФИФ" value="<?php echo isset($_SESSION['number_FIF']) ? $_SESSION['number_FIF'] : ''; ?>" name="number_FIF"></p>
        <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css">
        
        <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
        <script>
        $('.mask-phone').mask('99999-99');
        </script>
    
    <p>Выберите АЭС:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['title_aes'] = $_POST['title_aes'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query3 = mysqli_query($db, "SELECT DISTINCT `title_aes` FROM `Средства измерения` ORDER BY `title_aes`")){
        $rows3 = mysqli_num_rows($query3);
    }
    echo "<select id=\"aes\" select name=\"title_aes\">";
    echo "<option selected value disabled>".$_SESSION['title_aes']."</option>";
    for($i=0; $i<$rows3; $i++)
    {
    $mas3 = mysqli_fetch_array($query3);
    echo "<option>".$mas3["title_aes"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <input type="submit" value="Добавить АЭС" formnovalidate formaction="addaes.php" class = "add3" name="submit44"/>
    </p>
    
    <p>Выберите номер энергоблока, в котором расположен СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['power_unit_numbers'] = $_POST['power_unit_numbers'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query3 = mysqli_query($db, "SELECT DISTINCT `power_unit_numbers` FROM `Средства измерения` ORDER BY `power_unit_numbers`")){
        $rows3 = mysqli_num_rows($query3);
    }
    echo "<select id=\"npb\" select name=\"power_unit_numbers\">";
    echo "<option selected value disabled>".$_SESSION['power_unit_numbers']."</option>";
    for($i=0; $i<$rows3; $i++)
    {
    $mas3 = mysqli_fetch_array($query3);
    echo "<option>".$mas3["power_unit_numbers"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <input type="submit" value="Добавить энергоблок" class = "add3" name="submit9"/>
    </p>
    
    <p>Введите обозначение типа СИ (пример: SAFEPACK S3 BT):   
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['type_designation_si'] = $_POST['type_designation_si'];
        }
        ?>    
    <input type="text" id="tds" value="<?php echo isset($_SESSION['type_designation_si']) ? $_SESSION['type_designation_si'] : ''; ?>" name="type_designation_si" /></p>
    
    <p>Введите описание типа СИ (пример: 2021-82964-21.pdf): 
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['type_description'] = $_POST['type_description'];
        }
        ?>    
    <input type="text" id="tls" value="<?php echo isset($_SESSION['type_description']) ? $_SESSION['type_description'] : ''; ?>" name="type_description" /></p>
    
    <p>Введите методику поверки СИ (пример: 2021-mp82964-21.pdf):    
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['verification_procedure'] = $_POST['verification_procedure'];
        }
        ?>    
    <input type="text" id="vp" value="<?php echo isset($_SESSION['verification_procedure']) ? $_SESSION['verification_procedure'] : ''; ?>" name="verification_procedure" /></p>

    
    <p>Укажите сведения о типе СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['type_information_si'] = $_POST['type_information_si'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query11 = mysqli_query($db, "SELECT DISTINCT `type_information_si` FROM `Средства измерения`")){
        $rows11 = mysqli_num_rows($query11);
    }
    
    echo "<select id=\"tis\" select name=\"type_information_si\">";
    echo "<option selected value disabled>".$_SESSION['type_information_si']."</option>";
    for($i=0; $i<$rows11; $i++)
    {
    $mas11 = mysqli_fetch_array($query11);
    echo "<option>".$mas11["type_information_si"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить сведения" class = "add1" name="submit10"/>
    </p>
    
    <p>Укажите статус работы СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['status'] = $_POST['status'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query1 = mysqli_query($db, "SELECT DISTINCT `status` FROM `Средства измерения`")){
        $rows1 = mysqli_num_rows($query1);
    } 
    echo "<select id=\"stat\" select name=\"status\">";
    echo "<option selected value disabled>".$_SESSION['status']."</option>";
    for($i=0; $i<$rows1; $i++)
    {
    $mas1 = mysqli_fetch_array($query1);
    echo "<option>".$mas1["status"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить статус СИ" class = "add3" name="submit11"/>
    </p>
    
    
    
    <p>Введите срок свидетельства СИ (YYYY.MM.DD):
    <?php
        if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['term_certificate'] = $_POST['term_certificate'];
        }
        ?> 
    <p><input type="text" style="width: 200px; height: 25px;" id="qid" class="mask-phoner form-control" placeholder="2000.01.01" value="<?php echo isset($_SESSION['term_certificate']) ? $_SESSION['term_certificate'] : ''; ?>" name="term_certificate"></p>
        <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css">
        
        <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
        <script>
        $('.mask-phoner').mask('9999.99.99');
        </script>
    
    <p>Выберите принцип действия СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['principle_operation'] = $_POST['principle_operation'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    
    
    if ($query12 = mysqli_query($db, "SELECT DISTINCT `principle_operation` FROM `Средства измерения`")){
        $rows12 = mysqli_num_rows($query12);
    }
    
    echo "<select id=\"po\" select name=\"principle_operation\">";
    echo "<option selected value disabled>".$_SESSION['principle_operation']."</option>";
    for($i=0; $i<$rows12; $i++)
    {
    $mas12 = mysqli_fetch_array($query12);
    echo "<option>".$mas12["principle_operation"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить принцип действия" class = "add3" name="submit12"/>
    </p>
    
    <p>Выберите вид измеряемой величины СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['type_of_measured_value'] = $_POST['type_of_measured_value'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    
    
    if ($query13 = mysqli_query($db, "SELECT DISTINCT `type_of_measured_value` FROM `Средства измерения`")){
        $rows13 = mysqli_num_rows($query13);
    }
   
    
    echo "<select id=\"tomv\" select name=\"type_of_measured_value\">";
    echo "<option selected value disabled>".$_SESSION['type_of_measured_value']."</option>";
    for($i=0; $i<$rows13; $i++)
    {
    $mas13 = mysqli_fetch_array($query13);
    echo "<option>".$mas13["type_of_measured_value"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить вид" class = "add3" name="submit13"/>
    </p>
    
    <p>Автоматический или автоматизированный СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['automatic_or_automated'] = $_POST['automatic_or_automated'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    
    
    if ($query14 = mysqli_query($db, "SELECT DISTINCT `automatic_or_automated` FROM `Средства измерения`")){
        $rows14 = mysqli_num_rows($query14);
    }
    
    echo "<select id=\"aoa\" select name=\"automatic_or_automated\">";
    echo "<option selected value disabled>".$_SESSION['automatic_or_automated']."</option>";
    for($i=0; $i<$rows14; $i++)
    {
    $mas14 = mysqli_fetch_array($query14);
    echo "<option>".$mas14["automatic_or_automated"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <p>Выберите положение в измерительной системе СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['position_measuring_system'] = $_POST['position_measuring_system'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    
    
    if ($query15 = mysqli_query($db, "SELECT DISTINCT `position_measuring_system` FROM `Средства измерения`")){
        $rows15 = mysqli_num_rows($query15);
    }

    echo "<select id=\"pms\" select name=\"position_measuring_system\">";
    echo "<option selected value disabled>".$_SESSION['position_measuring_system']."</option>";
    for($i=0; $i<$rows15; $i++)
    {
    $mas15 = mysqli_fetch_array($query15);
    echo "<option>".$mas15["position_measuring_system"]."</option>"; 
    }
    echo "</select>";
    ?>
  
    <p>Выберите ответственного за испытания на АЭС:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['name'] = $_POST['name'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query16 = mysqli_query($db, "SELECT DISTINCT `name` FROM `Ответственные за испытания на АЭС`")){
        $rows16 = mysqli_num_rows($query16);
    } 
    
    echo "<select id=\"nn\" name=\"name\">";
    echo "<option selected value disabled>".$_SESSION['name']."</option>";
    for($i=0; $i<$rows16; $i++)
    {
    $mas16 = mysqli_fetch_array($query16);
    echo "<option>".$mas16["name"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <input type="submit" value="Добавить ответственного" class = "add1" name="submit1"/>
    </p>
    
    <p>Выберите эталонное и испытательное оборудование:
    <?php
     if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['title_standart'] = $_POST['title_standart'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query17 = mysqli_query($db, "SELECT DISTINCT `title_standart` FROM `Эталонное и испытательное оборудование`")){
      $rows17 = mysqli_num_rows($query17);  
    } 
    echo "<select id=\"sta\" name=\"title_standart\">";
    echo "<option selected value disabled>".$_SESSION['title_standart']."</option>";
    for($i=0; $i<$rows17; $i++)
    {
    $mas17 = mysqli_fetch_array($query17);
    echo "<option>".$mas17["title_standart"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <input type="submit" value="Добавить оборудование" class = "add2" name="submit2"/>
    </p>
    
    <p>Выберите изготовителя эталонного оборудования:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['title_company'] = $_POST['title_company'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if($query18 = mysqli_query($db, "SELECT DISTINCT `title_company` FROM `Изготовители эталонного оборудования, поверяющего данное СИ`")){
        $rows18 = mysqli_num_rows($query18);
    }

    echo "<select id=\"tco\" name=\"title_company\">";
    echo "<option selected value disabled>".$_SESSION['title_company']."</option>";
    for($i=0; $i<$rows18; $i++)
    {
    $mas18 = mysqli_fetch_array($query18);
    echo "<option>".$mas18["title_company"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить производителя" class = "add3" name="submit15"/>
    </p>
    
    <p>Выберите изготовителя СИ:
    <?php
    if ((isset($_POST['submit1']) || isset($_POST['submit2'])|| isset($_POST['submit6'])|| isset($_POST['submit8'])|| isset($_POST['submit9'])|| isset($_POST['submit10'])|| isset($_POST['submit11'])) ){
            $_SESSION['title_company'] = $_POST['title_company'];
        }
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query19 = mysqli_query($db, "SELECT DISTINCT `title_company` FROM `Изготовители СИ`")){
        $rows19 = mysqli_num_rows($query19);
    }
    echo "<select id = \"ppp\" name=\"title_company\">";
    echo "<option selected value disabled>".$_SESSION['title_company']."</option>";
    for($i=0; $i<$rows19; $i++)
    {
    $mas19 = mysqli_fetch_array($query19);
    echo "<option>".$mas19["title_company"]."</option>"; 
    }
    echo "</select>";
    ?>
    
    <input type="submit" value="Добавить производителя" class = "addmanufact" name="submit14"/>
    </p>
    
   
    <input id="clickMe" type="submit" onclick="sessionStorage.clear()" value="Добавить" name="button1" />
        
    </form>
    
    <form action="index.html" method="POST">
    <input type="submit" name = "submit" value="Назад"  >
    </form>
</section>
    <script src="https://yastatic.net/share2/share.js"></script>
	<div class="content-area">
		<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-color-scheme="bluewhite" data-services="vkontakte,facebook,telegram,twitter"></div><br><br>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=87733535&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/87733535/3_1_FFFF20FF_FFFF00FF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="87733535" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87733535, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87733535" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <a href = "https://metrika.yandex.ru/dashboard?id=87733535">
		<h4 class = "info">Ссылка на подробную информацию от Яндекс Аналитикс</h4>
	</a>
	</div>
</body>
</html>


<script>
var qid = document.getElementById('qid');
if(sessionStorage.getItem('qid') != null)
qid.value = sessionStorage.getItem('qid');
qid.addEventListener('input', function() {
sessionStorage.setItem('qid', this.value);
});
</script>   

<script>
var wid = document.getElementById('wid');
if(sessionStorage.getItem('wid') != null)
wid.value = sessionStorage.getItem('wid');
wid.addEventListener('input', function() {
sessionStorage.setItem('wid', this.value);
});
</script>   

<script>
var eid = document.getElementById('eid');
if(sessionStorage.getItem('eid') != null)
eid.value = sessionStorage.getItem('eid');
eid.addEventListener('input', function() {
sessionStorage.setItem('eid', this.value);
});
</script>   

<script>
var rid = document.getElementById('rid');
if(sessionStorage.getItem('rid') != null)
rid.value = sessionStorage.getItem('rid');
rid.addEventListener('input', function() {
sessionStorage.setItem('rid', this.value);
});
</script>   



<script>
var tid = document.getElementById('tid');
if(sessionStorage.getItem('tid') != null)
tid.value = sessionStorage.getItem('tid');
tid.addEventListener('input', function() {
sessionStorage.setItem('tid', this.value);
});
</script>   

<script>
var yid = document.getElementById('yid');
if(sessionStorage.getItem('yid') != null)
yid.value = sessionStorage.getItem('yid');
yid.addEventListener('input', function() {
sessionStorage.setItem('yid', this.value);
});
</script>   

<script>
var uid = document.getElementById('uid');
if(sessionStorage.getItem('uid') != null)
uid.value = sessionStorage.getItem('uid');
uid.addEventListener('input', function() {
sessionStorage.setItem('uid', this.value);
});
</script>   

<script>
var iid = document.getElementById('iid');
if(sessionStorage.getItem('iid') != null)
iid.value = sessionStorage.getItem('iid');
iid.addEventListener('input', function() {
sessionStorage.setItem('iid', this.value);
});
</script>   

<script>
var aes = document.getElementById('aes');
if(sessionStorage.getItem('aes') != null)
aes.value = sessionStorage.getItem('aes');
aes.addEventListener('input', function() {
sessionStorage.setItem('aes', this.value);
});
</script>   

<script>
var oid = document.getElementById('oid');
if(sessionStorage.getItem('oid') != null)
oid.value = sessionStorage.getItem('oid');
oid.addEventListener('input', function() {
sessionStorage.setItem('oid', this.value);
});
</script>   

<script>
var swid = document.getElementById('swid');
if(sessionStorage.getItem('swid') != null)
swid.value = sessionStorage.getItem('swid');
swid.addEventListener('input', function() {
sessionStorage.setItem('swid', this.value);
});
</script>   

<script>
var pid = document.getElementById('pid');
if(sessionStorage.getItem('pid') != null)
pid.value = sessionStorage.getItem('pid');
pid.addEventListener('input', function() {
sessionStorage.setItem('pid', this.value);
});
</script>   

<script>
var aid = document.getElementById('aid');
if(sessionStorage.getItem('aid') != null)
aid.value = sessionStorage.getItem('aid');
aid.addEventListener('input', function() {
sessionStorage.setItem('aid', this.value);
});
</script>   

<script>
var sid = document.getElementById('sid');
if(sessionStorage.getItem('sid') != null)
sid.value = sessionStorage.getItem('sid');
sid.addEventListener('input', function() {
sessionStorage.setItem('sid', this.value);
});
</script>   


<script>
var did = document.getElementById('did');
if(sessionStorage.getItem('did') != null)
did.value = sessionStorage.getItem('did');
did.addEventListener('input', function() {
sessionStorage.setItem('did', this.value);
});
</script>   

<script>
var npb = document.getElementById('npb');
if(sessionStorage.getItem('npb') != null)
npb.value = sessionStorage.getItem('npb');
npb.addEventListener('input', function() {
sessionStorage.setItem('npb', this.value);
});
</script>   

<script>
var tds = document.getElementById('tds');
if(sessionStorage.getItem('tds') != null)
tds.value = sessionStorage.getItem('tds');
tds.addEventListener('input', function() {
sessionStorage.setItem('tds', this.value);
});
</script>

<script>
var tls = document.getElementById('tls');
if(sessionStorage.getItem('tls') != null)
tls.value = sessionStorage.getItem('tls');
tls.addEventListener('input', function() {
sessionStorage.setItem('tls', this.value);
});
</script> 

<script>
var vp = document.getElementById('vp');
if(sessionStorage.getItem('vp') != null)
vp.value = sessionStorage.getItem('vp');
vp.addEventListener('input', function() {
sessionStorage.setItem('vp', this.value);
});
</script>  

<script>
var tis = document.getElementById('tis');
if(sessionStorage.getItem('tis') != null)
tis.value = sessionStorage.getItem('tis');
tis.addEventListener('input', function() {
sessionStorage.setItem('tis', this.value);
});
</script>   

<script>
var stat = document.getElementById('stat');
if(sessionStorage.getItem('stat') != null)
stat.value = sessionStorage.getItem('stat');
stat.addEventListener('input', function() {
sessionStorage.setItem('stat', this.value);
});
</script>   

<script>
var tc = document.getElementById('tc');
if(sessionStorage.getItem('tc') != null)
tc.value = sessionStorage.getItem('tc');
tc.addEventListener('input', function() {
sessionStorage.setItem('tc', this.value);
});
</script>   

<script>
var po = document.getElementById('po');
if(sessionStorage.getItem('po') != null)
po.value = sessionStorage.getItem('po');
po.addEventListener('input', function() {
sessionStorage.setItem('po', this.value);
});
</script>   

<script>
var tomv = document.getElementById('tomv');
if(sessionStorage.getItem('tomv') != null)
tomv.value = sessionStorage.getItem('tomv');
tomv.addEventListener('input', function() {
sessionStorage.setItem('tomv', this.value);
});
</script>   

<script>
var aoa = document.getElementById('aoa');
if(sessionStorage.getItem('aoa') != null)
aoa.value = sessionStorage.getItem('aoa');
aoa.addEventListener('input', function() {
sessionStorage.setItem('aoa', this.value);
});
</script> 

<script>
var pms = document.getElementById('pms');
if(sessionStorage.getItem('pms') != null)
pms.value = sessionStorage.getItem('pms');
pms.addEventListener('input', function() {
sessionStorage.setItem('pms', this.value);
});
</script> 

<script>
var nn = document.getElementById('nn');
if(sessionStorage.getItem('nn') != null)
nn.value = sessionStorage.getItem('nn');
nn.addEventListener('input', function() {
sessionStorage.setItem('nn', this.value);
});
</script> 

<script>
var sta = document.getElementById('sta');
if(sessionStorage.getItem('sta') != null)
sta.value = sessionStorage.getItem('sta');
sta.addEventListener('input', function() {
sessionStorage.setItem('sta', this.value);
});
</script> 

<script>
var tco = document.getElementById('tco');
if(sessionStorage.getItem('tco') != null)
tco.value = sessionStorage.getItem('tco');
tco.addEventListener('input', function() {
sessionStorage.setItem('tco', this.value);
});
</script> 

<script>
var ppp = document.getElementById('ppp');
if(sessionStorage.getItem('ppp') != null)
ppp.value = sessionStorage.getItem('ppp');
ppp.addEventListener('input', function() {
sessionStorage.setItem('ppp', this.value);
});
</script> 


