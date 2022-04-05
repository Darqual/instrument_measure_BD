<?php
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'connection.php'; // подключаем скрипт


if (isset($_POST['title_company'])) {
    

    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

  
  
    
    

    // экранирования символов для mysql
    $title_company = htmlentities(mysqli_real_escape_string($link, $_POST['title_company']));
    if (isset($_POST['title_company'])){
        $title_company = htmlentities(mysqli_real_escape_string($link, $_POST['title_company']));
    }
    
    $data_registration = htmlentities(mysqli_real_escape_string($link, $_POST['data_registration']));
    $physical_address = htmlentities(mysqli_real_escape_string($link, $_SESSION['physical_address']));
    if (isset($_POST['physical_address'])){
        $physical_address = htmlentities(mysqli_real_escape_string($link, $_POST['physical_address']));
    }
    
    $legal_address = htmlentities(mysqli_real_escape_string($link, $_SESSION['legal_address']));
    if (isset($_POST['legal_address'])){
        $legal_address = htmlentities(mysqli_real_escape_string($link, $_POST['legal_address']));
    }
    $license = htmlentities(mysqli_real_escape_string($link, $_SESSION['license']));
    if (isset($_POST['license'])){
        $license = htmlentities(mysqli_real_escape_string($link, $_POST['license']));
    }
    $email_manufacturers = htmlentities(mysqli_real_escape_string($link, $_SESSION['email_manufacturers']));
    if (isset($_POST['email_manufacturers'])){
        $email_manufacturers = htmlentities(mysqli_real_escape_string($link, $_POST['email_manufacturers']));
    }
    $garant = htmlentities(mysqli_real_escape_string($link, $_SESSION['garant']));
    if (isset($_POST['garant'])){
        $garant = htmlentities(mysqli_real_escape_string($link, $_POST['garant']));
    }
    $Calibration_capability = htmlentities(mysqli_real_escape_string($link, $_SESSION['Calibration_capability']));
    if (isset($_POST['Calibration_capability'])){
        $Calibration_capability = htmlentities(mysqli_real_escape_string($link, $_POST['Calibration_capability']));
    }

    if (isset($_POST['button1'])){
        // создание строки запроса
     
        $query = "INSERT INTO `Изготовители эталонного оборудования, поверяющего данное СИ` VALUES(NULL, '$title_company','$data_registration' ,'$physical_address', '$legal_address' ,'$license' , '$email_manufacturers', '$garant','$Calibration_capability',NULL)";
     
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
      
        if ($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }

        unset($_SESSION['title_company']);
        unset($_SESSION['data_registration']);
        unset($_SESSION['physical_address']);
        unset($_SESSION['legal_address']);
        unset($_SESSION['license']);
        unset($_SESSION['email_manufacturers']);
        unset($_SESSION['garant']);
        unset($_SESSION['Calibration_capability']);
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
    isset($_POST['submit7'])
) {
    
    if (!isset($_SESSION['title_company']) || isset($_POST['title_company'])) {
        $_SESSION['title_company'] = $_POST['title_company'];
    }

    $_SESSION['data_registration'] = $_POST['data_registration'];

    if (!isset($_SESSION['physical_address']) || isset($_POST['physical_address'])) {
        $_SESSION['physical_address'] = $_POST['physical_address'];
    }
    if (!isset($_SESSION['legal_address']) || isset($_POST['legal_address'])) {
        $_SESSION['legal_address'] = $_POST['legal_address'];
    }

    if (!isset($_SESSION['license']) || isset($_POST['license'])) {
        $_SESSION['license'] = $_POST['license'];
    }

    if (!isset($_SESSION['email_manufacturers']) || isset($_POST['email_manufacturers'])) {
        $_SESSION['email_manufacturers'] = $_POST['email_manufacturers'];
    }
    if (!isset($_SESSION['garant']) || isset($_POST['garant'])) {
        $_SESSION['garant'] = $_POST['garant'];
    }
    
    if (!isset($_SESSION['Calibration_capability']) || isset($_POST['Calibration_capability'])) {
        $_SESSION['Calibration_capability'] = $_POST['Calibration_capability'];
    }

}

if (isset($_POST['submit1'])) {
   header("Location: ./addnote.php");
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
	<h2 class = "title">Добавить производителя</h2>
	
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


    <p>Введите наименования производителя эталонного оборудования (пример: ИП "Рублёв"):
    <input type="text" value="<?php echo isset($_SESSION['title_company']) ? $_SESSION['title_company'] : ''; ?>" name="title_company" /> </p>
    
    <p>Введите дату регистрации компании (YYYY.MM.DD):  
    <input type="text" value="<?php echo isset($_SESSION['data_registration']) ? $_SESSION['data_registration'] : ''; ?>" name="data_registration" /> </p>
    <p>Введите физический адрес (пример: г. Москва, ул. Рыбная, д.5.):
    <input type="text" value="<?php echo isset($_SESSION['physical_address']) ? $_SESSION['physical_address'] : ''; ?>" name="physical_address" /> </p>
    
    <p>Введите юридический адрес (пример: г. Москва, ул. Рыбная, д.5.):    
    <input type="text" value="<?php echo isset($_SESSION['legal_address']) ? $_SESSION['legal_address'] : ''; ?>" name="legal_address" /> </p>
    
    <p>Выберите лицензию:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query11 = mysqli_query($db, "SELECT DISTINCT `license` FROM `Изготовители эталонного оборудования, поверяющего данное СИ`")){
        $rows11 = mysqli_num_rows($query11);
    }
    
    echo "<select name=\"license\">";
    echo "<option selected value disabled>".$_SESSION['license']."</option>";
    for($i=0; $i<$rows11; $i++)
    {
    $mas11 = mysqli_fetch_array($query11);
    echo "<option>".$mas11["license"]."</option>"; 
    }
    echo "</select>";
    ?>
    </p>
    
    <p>Введите электронную почту (пример: service@volchok.ru):    
    <input type="text" value="<?php echo isset($_SESSION['email_manufacturers']) ? $_SESSION['email_manufacturers'] : ''; ?>" name="email_manufacturers" /> </p>
    
    <p>Выберите срок гарантии:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query11 = mysqli_query($db, "SELECT DISTINCT `garant` FROM `Изготовители эталонного оборудования, поверяющего данное СИ`")){
        $rows11 = mysqli_num_rows($query11);
    }
    
    echo "<select name=\"garant\">";
    echo "<option selected value disabled>".$_SESSION['garant']."</option>";
    for($i=0; $i<$rows11; $i++)
    {
    $mas11 = mysqli_fetch_array($query11);
    echo "<option>".$mas11["garant"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить срок гарантии" class = "add3" name="submit1"/>
    </p>
    
    <p>Выберите возможность калибровки:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query1 = mysqli_query($db, "SELECT DISTINCT `Calibration_capability` FROM `Изготовители эталонного оборудования, поверяющего данное СИ`")){
        $rows1 = mysqli_num_rows($query1);
    } 
    echo "<select name=\"Calibration_capability\">";
    echo "<option selected value disabled>".$_SESSION['Calibration_capability']."</option>";
    for($i=0; $i<$rows1; $i++)
    {
    $mas1 = mysqli_fetch_array($query1);
    echo "<option>".$mas1["Calibration_capability"]."</option>"; 
    }
    echo "</select>";
    ?>
    </p>
 
    <input type="submit" value="Добавить" class = "add" name="button1" />
        
    </form>
    
    <form action="addnote.php" method="POST">
    <input type="submit" name = "submit" value="Назад"  >
    </form>
</section>
    
</body>
</html>