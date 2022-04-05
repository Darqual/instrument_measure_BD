<?php
ini_set("display_errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'connection.php'; // подключаем скрипт


if (isset($_POST['name'])) {
    

    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

  
  
    
    

    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    if (isset($_POST['name'])){
        $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    }
    
    $age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
    $workshop = htmlentities(mysqli_real_escape_string($link, $_SESSION['workshop']));
    if (isset($_POST['workshop'])){
        $workshop = htmlentities(mysqli_real_escape_string($link, $_POST['workshop']));
    }
    
    $phone = htmlentities(mysqli_real_escape_string($link, $_SESSION['phone']));
    if (isset($_POST['phone'])){
        $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
    }
    $email = htmlentities(mysqli_real_escape_string($link, $_SESSION['email']));
    if (isset($_POST['email'])){
        $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    }
    $work_experience = htmlentities(mysqli_real_escape_string($link, $_SESSION['work_experience']));
    if (isset($_POST['work_experience'])){
        $work_experience = htmlentities(mysqli_real_escape_string($link, $_POST['work_experience']));
    }
    $post = htmlentities(mysqli_real_escape_string($link, $_SESSION['post']));
    if (isset($_POST['post'])){
        $post = htmlentities(mysqli_real_escape_string($link, $_POST['post']));
    }
    $superiors = htmlentities(mysqli_real_escape_string($link, $_SESSION['superiors']));
    if (isset($_POST['superiors'])){
        $superiors = htmlentities(mysqli_real_escape_string($link, $_POST['superiors']));
    }

    if (isset($_POST['button1'])){
        // создание строки запроса
     
        $query = "INSERT INTO `Ответственные за испытания на АЭС` VALUES(NULL , '$name','$age' ,'$workshop', '$phone' ,'$email' ,'$work_experience' ,'$post','$superiors')";
     
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
      
        if ($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }

        unset($_SESSION['name']);
        unset($_SESSION['age']);
        unset($_SESSION['workshop']);
        unset($_SESSION['phone']);
        unset($_SESSION['email']);
        unset($_SESSION['work_experience']);
        unset($_SESSION['post']);
        unset($_SESSION['superiors']);
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
    
    if (!isset($_SESSION['name']) || isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }

    $_SESSION['age'] = $_POST['age'];

    if (!isset($_SESSION['workshop']) || isset($_POST['workshop'])) {
        $_SESSION['workshop'] = $_POST['workshop'];
    }
    if (!isset($_SESSION['phone']) || isset($_POST['phone'])) {
        $_SESSION['phone'] = $_POST['phone'];
    }

    if (!isset($_SESSION['email']) || isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }

    if (!isset($_SESSION['work_experience']) || isset($_POST['work_experience'])) {
        $_SESSION['work_experience'] = $_POST['work_experience'];
    }
    if (!isset($_SESSION['post']) || isset($_POST['post'])) {
        $_SESSION['post'] = $_POST['post'];
    }
    
    if (!isset($_SESSION['superiors']) || isset($_POST['superiors'])) {
        $_SESSION['superiors'] = $_POST['superiors'];
    }

}

if (isset($_POST['submit1'])) {
   header("Location: ./addwh.php");
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
if (isset($_POST['submit7'])) {
   header("Location: ./addpost.php");
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
	<h2 class = "title">Добавить ответственного</h2>
	
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


    <p>Введите ФИО:
    <input type="text" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" name="name" /> </p>
    
    <p>Введите возраст:  
    <input type="text" value="<?php echo isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?>" name="age" /> лет. </p>
    
    <p>Выберите цех:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query3 = mysqli_query($db, "SELECT DISTINCT `workshop` FROM `Ответственные за испытания на АЭС` ORDER BY `workshop`")){
        $rows3 = mysqli_num_rows($query3);
    }
    echo "<select name=\"workshop\">";
    echo "<option selected value disabled>".$_SESSION['workshop']."</option>";
    for($i=0; $i<$rows3; $i++)
    {
    $mas3 = mysqli_fetch_array($query3);
    echo "<option>".$mas3["workshop"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить цех" class = "add3" name="submit1"/>
    </p>
    
    <p>Введите номер телефона (пример: +7(937) 136 10 76):    
    <input type="text" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>" name="phone" /> </p>
    
    <p>Введите электронную почту (пример: kulak993@mail.ru):    
    <input type="text" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" name="email" /> </p>
    
    <p>Введите стаж работы:    
    <input type="text" value="<?php echo isset($_SESSION['work_experience']) ? $_SESSION['work_experience'] : ''; ?>" name="work_experience" /> лет.</p>
    
    <p>Выберите должность:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query11 = mysqli_query($db, "SELECT DISTINCT `post` FROM `Ответственные за испытания на АЭС`")){
        $rows11 = mysqli_num_rows($query11);
    }
    
    echo "<select name=\"post\">";
    echo "<option selected value disabled>".$_SESSION['post']."</option>";
    for($i=0; $i<$rows11; $i++)
    {
    $mas11 = mysqli_fetch_array($query11);
    echo "<option>".$mas11["post"]."</option>"; 
    }
    echo "</select>";
    ?>
    <input type="submit" value="Добавить должность" class = "add3" name="submit7"/>
    </p>
    
    <p>Выберите непосредственного начальника:
    <?php
    $db = mysqli_connect($host, $user, $password);
    mysqli_select_db($db, $database);
    if ($query1 = mysqli_query($db, "SELECT DISTINCT `superiors` FROM `Ответственные за испытания на АЭС`")){
        $rows1 = mysqli_num_rows($query1);
    } 
    echo "<select name=\"superiors\">";
    echo "<option selected value disabled>".$_SESSION['superiors']."</option>";
    for($i=0; $i<$rows1; $i++)
    {
    $mas1 = mysqli_fetch_array($query1);
    echo "<option>".$mas1["superiors"]."</option>"; 
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