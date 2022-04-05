<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XML</title>
	<script>
	    function tableSearch() {
        var phrase = document.getElementById('search-text');
        var table = document.getElementById('table');
        var regPhrase = new RegExp(phrase.value, 'i');
        var flag = false;
        for (var i = 1; i < table.rows.length; i++) {
            flag = false;
            for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                if (flag) break;
            }
            if (flag) {
                table.rows[i].style.display = "";
            } else {
                table.rows[i].style.display = "none";
            }

        }
    }
	</script>
	<link rel="stylesheet" href="style4.css">
	<link rel="stylesheet" href="http://tristen.ca/tablesort/tablesort.css">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tablesort/5.0.2/tablesort.min.js'></script>
	<style>
        .demTable {
            text-align:center;
			border:1px solid #b2c8f0;
			border-collapse:collapse;
			padding:6px;
			font-family: 'Lucida Sans Unicode';
			font-size: 14px;
		}
		.demTable th {
			border:1px solid #b2c8f0;
			padding:6px;
			background: #000000;
			color: #ffffff;
		}
		.demTable td {
			border:1px solid #b2c8f0;
			padding:6px;
			background: #FFFFFF;
			color: #000000;
		}
		 th[role=columnheader]:not(.no-sort) {
        	cursor: pointer;
        }
        
        th[role=columnheader]:not(.no-sort):after {
        	content: '';
        	float: right;
        	margin-top: 7px;
        	border-width: 0 4px 4px;
        	border-style: solid;
        	border-color: #ffffff transparent;
        	visibility: hidden;
        	opacity: 0;
        	-ms-user-select: none;
        	-webkit-user-select: none;
        	-moz-user-select: none;
        	user-select: none;
        }
        
        th[aria-sort=ascending]:not(.no-sort):after {
        	border-bottom: none;
        	border-width: 4px 4px 0;
        }
        
        th[aria-sort]:not(.no-sort):after {
        	visibility: visible;
        	opacity: 0.4;
        }
        
        th[role=columnheader]:not(.no-sort):hover:after {
        	visibility: visible;
        	opacity: 1;
        }
    </style>
</head>
<body>
		<header> 
	<h1 class = "title">Метрологическая база знаний</h1>
	<h2 class = "title">База средств измерений</h2>
	
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
    
	<main class = "main">
		<h1 class = "title2">База средства измерений</h1>
		<h3 style="margin-left:60px">Поиск:</h3>
		<p><input style="margin-left:60px" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()"></p>
		<div class = "table">
			<table id="table" class="demTable" style="margin-left:60px">
				<thead>
					<tr>
						<th>Наименование СИ</th>
						<th>Код ККС</th>
						<th>Номер в ФИФ</th>
						<th>Место установки</th>
						<th>Номер энергоблока</th>
						<th>Обозначение типа СИ</th>
						<th>Описание типа СИ</th>
						<th>Методика поверки СИ</th>
						<th>Сведения о типе СИ</th>
						<th>Статус работы СИ</th>
						<th>Срок свидетельства СИ</th>
						<th>Принцип действия СИ</th>
						<th>Вид измеряемой величины</th>
						<th>Автоматический или автоматизированный СИ</th>
						<th>Выберите положение в измерительной системе СИ</th>
					</tr>
				</thead>
				
				
				
				

				<tbody>
				<?php
									error_reporting(E_ALL);
									ini_set('display_errors','on');
									$receipts = simplexml_load_file("receipts.xml");
									for ($i = 0; $i < 17; $i++) { ?>
										<tr>
											<td><?=$receipts->receipt[$i]->title_si?></td>
											<td><?=$receipts->receipt[$i]->KKS?></td>
											<td><?=$receipts->receipt[$i]->number_FIF?></td>
											<td><?=$receipts->receipt[$i]->installation_location?></td>
											<td><?=$receipts->receipt[$i]->power_unit_numbers?></td>
											<td><?=$receipts->receipt[$i]->type_designation_si?></td>
											<td><?=$receipts->receipt[$i]->type_description?></td>
											<td><?=$receipts->receipt[$i]->verification_procedure?></td>
											<td><?=$receipts->receipt[$i]->measurement_methodology?></td>
											<td><?=$receipts->receipt[$i]->type_information_si?></td>
											<td><?=$receipts->receipt[$i]->status?></td>
											<td><?=$receipts->receipt[$i]->term_certificate?></td>
											<td><?=$receipts->receipt[$i]->principle_operation?></td>
											<td><?=$receipts->receipt[$i]->type_of_measured_value?></td>
											<td><?=$receipts->receipt[$i]->automatic_or_automated?></td>
									</tr>
								<?php
									}
									?>
				</tbody>
			</table>
		</div>
		<p><button onclick="window.location.href = 'receipts.xml';" style="margin-left:60px">XML ФАЙЛ</button></p>
		<script>
        new Tablesort(document.getElementById('table'));
    	</script>
		</div>
		<div class = "info1">
			Copyright © 2022 LZD Degtyareb Gleb
		</div>
		</main>
	<script src="https://yastatic.net/share2/share.js"></script>
	<div class="content-area">
		<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-color-scheme="bluewhite" data-services="vkontakte,facebook,telegram,twitter"></div><br><br>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=85957101&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/85957101/3_0_FFFFFFFF_FFFFFFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="85957101" data-lang="ru" /></a>
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
		<h4 class = "info">Ссылка на подробную информацию по посещениям</h4>
	</a>
	</div>
</body>
</html>