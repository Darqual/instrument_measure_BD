<?php
    require_once 'connection.php';
    $status = null;
    if (isset($_POST["leave-button"])){
        if (isset($_COOKIE["status"])){
            setcookie('status', '$_COOKIE["status"]', 1);
            echo "<script>window.location.reload();</script>";
        }
    }
    if(isset($_POST["headline"])){
        $rss = simplexml_load_file("feed.xml");
        $newchild = $rss->channel->addChild("item");
        $newchild->addChild("title", $_POST["headline"]);
        $newchild->addChild("description", $_POST["description"]);
        $newchild->addChild("pubDate", date('D, j M Y G:i:s T', time()));
        $status = $rss->asXML("feed.xml");
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="yandex-verification" content="c2ad211c20e4b28b" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RSS</title>
	<link rel="stylesheet" href="style4.css">
</head>
<body>
	<header> 
	<h1 class = "title">Метрологическая база знаний</h1>
	<h2 class = "title">Новости</h2>
	
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
	<main class="main">
				<div class="inner-area">
					<div style="margin: 10px 60px">
                        <h2>RSS новости</h2> 
                        <form method="post">
                            Заголовок новости:<br>
                            <input size="51px" class="input" name="headline" type="text" required><br>
                            Описание новости:<br>
                            <textarea rows="7" cols="50" name="description" ></textarea><br>
                            <input name="button" type="submit">
                        </form>
                        <form style="margin-top:20px" method="post">
                            <input size="47px" class="input" name="rssurl" type="text" placeholder="Ссылка в формате https://lenta.ru/rss" required pattern="http(s?)://.*">
                            <input name="button" type="submit" value="Добавить">
                        </form>
                        <?php
                        
    if(isset($_POST["rssurl"])){
        $url = $_POST["rssurl"];
    	$rss = simplexml_load_file($url);
    	$i = count($rss -> channel ->item) - 1;
    	while($i >= 0){
    	    $attributes = $rss -> channel ->item->enclosure->attributes();
    	    ?>
            <div class="newsbox">
                <h3 style="padding:10px"><a href="<?=$rss -> channel ->item[$i]->link?>"><?=$rss -> channel ->item[$i]->title?></a></h3>
                <p><img src="<?=$attributes[0]?>"></p>
        		<p><?=$rss -> channel ->item[$i]->description?><br><br><?=$rss -> channel ->item[$i]->pubDate?></p>
        	</div>
                
    		<?php
    	    $i--;
    	}
    }
   
    
?>
<?php
     $url = "feed.xml";
	$rss = simplexml_load_file($url);
	$i = count($rss -> channel ->item) - 1;
	while($i >= 0){
	    ?>
        <div class="newsbox">
            <h3><a><?=$rss->channel->item[$i] -> title?></a></h3>
    		<p><?=$rss->channel->item[$i] -> description?><br><br><?=$rss->pubDate->item[$i] -> title?><?=$rss->channel->item[$i] -> author?></p>
    	</div>
            
		<?php
	    $i--;
	}
    
?>
			</div>	
		</div>
	</main>
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
    <a href = "stat.html">
		<h4 class = "info">Ссылка на подробную информацию</h4>
	</a>
	</div>
</html>