<?php
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'connection.php'; // подключаем скрипт


if (isset($_POST['type_of_measured_value'])) {
    

    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

  
  
    
    

    // экранирования символов для mysql
    $type_of_measured_value = htmlentities(mysqli_real_escape_string($link, $_POST['type_of_measured_value']));
    if (isset($_POST['type_of_measured_value'])){
        $type_of_measured_value = htmlentities(mysqli_real_escape_string($link, $_POST['type_of_measured_value']));
    }
    
    

    if (isset($_POST['button1'])){
        // создание строки запроса
     
        $query = "INSERT INTO `Средства измерения` VALUES(NULL, NULL, NULL, NULL ,NULL, NULL ,NULL , NULL, NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$type_of_measured_value' ,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
     
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
      
        if ($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }

        unset($_SESSION['type_of_measured_value']);
        
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
    
    if (!isset($_SESSION['type_of_measured_value']) || isset($_POST['type_of_measured_value'])) {
        $_SESSION['type_of_measured_value'] = $_POST['type_of_measured_value'];
    }


}

if (isset($_POST['submit1'])) {
   header("Location: ./addnote.php");
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
	<h2 class = "title">Добавить вид измеряемой величины</h2>
	
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


    <p>Введите вид измеряемой величины:
    <input type="text" value="<?php echo isset($_SESSION['type_of_measured_value']) ? $_SESSION['type_of_measured_value'] : ''; ?>" name="type_of_measured_value" /> </p>
    
    
 
    <input type="submit" value="Добавить" class = "add" name="button1" />
        
    </form>
    
    <form action="addnote.php" method="POST">
    <input type="submit" name = "submit" value="Назад"  >
    </form>
</section>
    
</body>
</html>