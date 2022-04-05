<?php
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'connection.php'; // подключаем скрипт


if (isset($_POST['title_standart'])) {
    

    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

  
  
    
    

    // экранирования символов для mysql
    $title_standart = htmlentities(mysqli_real_escape_string($link, $_POST['title_standart']));
    if (isset($_POST['title_standart'])){
        $title_standart = htmlentities(mysqli_real_escape_string($link, $_POST['title_standart']));
    }
    
    $pasport = htmlentities(mysqli_real_escape_string($link, $_POST['pasport']));
    $service_life = htmlentities(mysqli_real_escape_string($link, $_SESSION['service_life']));
    if (isset($_POST['service_life'])){
        $service_life = htmlentities(mysqli_real_escape_string($link, $_POST['service_life']));
    }
    
    $time_use = htmlentities(mysqli_real_escape_string($link, $_SESSION['time_use']));
    if (isset($_POST['time_use'])){
        $time_use = htmlentities(mysqli_real_escape_string($link, $_POST['time_use']));
    }
    $verification_certificate = htmlentities(mysqli_real_escape_string($link, $_SESSION['verification_certificate']));
    if (isset($_POST['verification_certificate'])){
        $verification_certificate = htmlentities(mysqli_real_escape_string($link, $_POST['verification_certificate']));
    }
    $сertificate_attestation = htmlentities(mysqli_real_escape_string($link, $_SESSION['сertificate_attestation']));
    if (isset($_POST['сertificate_attestation'])){
        $сertificate_attestation = htmlentities(mysqli_real_escape_string($link, $_POST['сertificate_attestation']));
    }
    $accuracy_class = htmlentities(mysqli_real_escape_string($link, $_SESSION['accuracy_class']));
    if (isset($_POST['accuracy_class'])){
        $accuracy_class = htmlentities(mysqli_real_escape_string($link, $_POST['accuracy_class']));
    }
    $measurement_method = htmlentities(mysqli_real_escape_string($link, $_SESSION['measurement_method']));
    if (isset($_POST['measurement_method'])){
        $measurement_method = htmlentities(mysqli_real_escape_string($link, $_POST['measurement_method']));
    }

    if (isset($_POST['button1'])){
        // создание строки запроса
     
        $query = "INSERT INTO `Эталонное и испытательное оборудование` VALUES(NULL, '$title_standart','$pasport' ,'$service_life', '$time_use' ,'$verification_certificate' , NULL, '$сertificate_attestation','$accuracy_class','$measurement_method')";
     
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
      
        if ($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }

        unset($_SESSION['title_standart']);
        unset($_SESSION['pasport']);
        unset($_SESSION['service_life']);
        unset($_SESSION['time_use']);
        unset($_SESSION['verification_certificate']);
        unset($_SESSION['сertificate_attestation']);
        unset($_SESSION['accuracy_class']);
        unset($_SESSION['measurement_method']);
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
    
    if (!isset($_SESSION['title_standart']) || isset($_POST['title_standart'])) {
        $_SESSION['title_standart'] = $_POST['title_standart'];
    }

    $_SESSION['pasport'] = $_POST['pasport'];

    if (!isset($_SESSION['service_life']) || isset($_POST['service_life'])) {
        $_SESSION['service_life'] = $_POST['service_life'];
    }
    if (!isset($_SESSION['time_use']) || isset($_POST['time_use'])) {
        $_SESSION['time_use'] = $_POST['time_use'];
    }

    if (!isset($_SESSION['verification_certificate']) || isset($_POST['verification_certificate'])) {
        $_SESSION['verification_certificate'] = $_POST['verification_certificate'];
    }

    if (!isset($_SESSION['сertificate_attestation']) || isset($_POST['сertificate_attestation'])) {
        $_SESSION['сertificate_attestation'] = $_POST['сertificate_attestation'];
    }
    if (!isset($_SESSION['accuracy_class']) || isset($_POST['accuracy_class'])) {
        $_SESSION['accuracy_class'] = $_POST['accuracy_class'];
    }
    
    if (!isset($_SESSION['measurement_method']) || isset($_POST['measurement_method'])) {
        $_SESSION['measurement_method'] = $_POST['measurement_method'];
    }

}

if (isset($_POST['submit1'])) {
   header("Location: ./addnote.php");
   exit;
}
if (isset($_POST['submit2'])) {
   header("Location: ./newnode.php");
   exit;
}
if (isset($_POST['submit5'])){
   header("Location: ./neworder.php");
   exit;
}
if (isset($_POST['submit6'])) {
   header("Location: ./newmanufacture.php");
   exit;
}

?><!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="style4.css">
<title>Добавить СИ</title>
</head>
<body>
    <header> 
	<h1 class = "title">Метрологическая база знаний</h1>
	<h2 class = "title">Добавить оборудование</h2>
	
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


    <p>Введите наименование оборудования:
    <input type="text" value="<?php echo isset($_SESSION['title_standart']) ? $_SESSION['title_standart'] : ''; ?>" name="title_standart" /> </p>
    
    <p>Введите серию паспорта (пример: 15А432И944):  
    <input type="text" value="<?php echo isset($_SESSION['pasport']) ? $_SESSION['pasport'] : ''; ?>" name="pasport" /> </p>
    <p>Введите срок жизни:
    <input type="text" value="<?php echo isset($_SESSION['service_life']) ? $_SESSION['service_life'] : ''; ?>" name="service_life" /> месяецев. </p>
    
    <p>Введите время в пользовании:    
    <input type="text" value="<?php echo isset($_SESSION['time_use']) ? $_SESSION['time_use'] : ''; ?>" name="time_use" /> месяцев. </p>
    
    <p>Введите свидетельство о поверке эталонного оборудования (пример: elemer-iksu-ver.pdf):    
    <input type="text" value="<?php echo isset($_SESSION['verification_certificate']) ? $_SESSION['verification_certificate'] : ''; ?>" name="verification_certificate" /> </p>
    
    <p>Введите сертификат об аттестации эталонного оборудования (пример: elemer-iksu-cert.pdf):    
    <input type="text" value="<?php echo isset($_SESSION['сertificate_attestation']) ? $_SESSION['сertificate_attestation'] : ''; ?>" name="сertificate_attestation" /> </p>
    
    <p>Выберите класс точности:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query11 = mysqli_query($db, "SELECT DISTINCT `accuracy_class` FROM `Эталонное и испытательное оборудование`")){
        $rows11 = mysqli_num_rows($query11);
    }
    
    echo "<select name=\"accuracy_class\">";
    echo "<option selected value disabled>".$_SESSION['accuracy_class']."</option>";
    for($i=0; $i<$rows11; $i++)
    {
    $mas11 = mysqli_fetch_array($query11);
    echo "<option>".$mas11["accuracy_class"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить класс точности" class = "add3" name="submit1"/>
    </p>
    
    <p>Выберите метод измерения:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query1 = mysqli_query($db, "SELECT DISTINCT `measurement_method` FROM `Эталонное и испытательное оборудование`")){
        $rows1 = mysqli_num_rows($query1);
    } 
    echo "<select name=\"measurement_method\">";
    echo "<option selected value disabled>".$_SESSION['measurement_method']."</option>";
    for($i=0; $i<$rows1; $i++)
    {
    $mas1 = mysqli_fetch_array($query1);
    echo "<option>".$mas1["measurement_method"]."</option>"; 
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