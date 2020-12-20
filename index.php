<?php

if (isset($_POST["lang_eng"])) {
	setcookie("lang","eng",time () + 3600*30,"/");
}
if (isset($_POST["lang_rus"])) {
	setcookie("lang","rus",time () + 3600*30,"/");
}
if (isset($_POST["black"])) {
		setcookie("color","black",time () + 3600*30,"/");
}
if (isset($_POST["white"])) {
		setcookie("color","white",time () + 3600*30,"/");
}

 ?>
<!DOCTYPE html>
<html lang="ru">
<head>

 <title> S2d1ent portfolio </title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
	if ($_COOKIE["color"]=="black"):
 ?>
<link rel="stylesheet" href="style/black.css"> 
<?php 
	endif;
 ?>
<link rel="stylesheet" href="style/index.css"> 
<link rel="stylesheet" href="style/index_mobile.css" id="css"> 
<link rel="shortcut icon" href="src/s2dLogo.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>
<body id="body">
	<header id="header">
		<a href="index.php"><img src="src/s2dLogo.png" class="logo"></a>
		<nav id="nav">
			<a href="index.php" class="nav-a" id="navIndex">Главная</a>
			<a href="layouts" class="nav-a" id="navLayout">Макеты</a>
			<a href="buy" class="nav-a" id="navBuy">Сделать заказ</a>
		</nav>
<?php 
	if ($_COOKIE["color"]=="white" || $_COOKIE["color"]==""):
 ?>
		<form action="#" method="POST">
			<button name="black" id="color" style="outline: none; border: none;">Светлая /  </button>
			</form>
<?php 
	endif;
 ?>
 <?php 
	if ($_COOKIE["color"]=="black"):
 ?>
 	<form action="#" method="POST">
			<button name="white" id="color" style="outline: none; border: none;">Темная /  </button>
			</form>
 <?php 
	endif;
 ?>
			<form action="#" method="POST">
				<button name="lang_eng" id="lang_eng" style="outline: none; border: none;"> Рус</button>
			</form>
	</header>
<section class="mobile__menu">
	<div class="mobile__menu-container">
		<a href="/"><img src="src/mobile__icon_index_black.png" class="mobile__menu-img"></a>
		<a href="layouts"><img src="src/mobile__icon_layouts_black.png" class="mobile__menu-img"></a>
		<a href="buy"><img src="src/mobile__icon_buy_black.png" class="mobile__menu-img"></a>
		<form action="#" method="POST">
				<button name="lang_eng" id="lang_eng" style="outline: none; border: none;"> Рус</button>
			</form>
	</div>
</section>
<section class="about">
	<dir class="about__container">
		<div class="about__left">
			<img src="src/s2dLogo.png" class="about__container-img">
			<h2 class="about__container-name">s2d1ent</h2>
			<div class="about__container-subtitle">Web-dev</div>
		</div>
		<div class="about__info-rel">
			<h2 class="about__info-title" id="namedev">Имя</h2>
			<div class="about__info-subtitle" id="nameStr">Виктор</div>
			<h2 class="about__info-title" id="age">Возраст</h2>
			<div class="about__info-subtitle">16</div>
		</div>
		<div class="about__right">
			<h2 class="about__right-title" id="myC">Мои контакты</h2>
			<ul class="about__contacts">
				<li class="about__contacts-li">
					<a target="_blank" href="https://vk.com/vornfrosti" class="about__contacts-li">VK
					</a>
				</li>
				<li class="about__contacts-li">
					<a target="_blank" href="https://twitter.com/s2d1ent" class="about__contacts-li">Twitter
					</a>
				</li>
				<li class="about__contacts-li">
					<a target="_blank" href="https://github.com/s2d1ent" class="about__contacts-li">GitHub
					</a>
				</li>
				<li class="about__contacts-li">tumenev33@mail.ru</li>
				<li class="about__contacts-li">vornfrost@gmail.com</li>
			</ul>
		</div>
		<div class="about__info">
			<h2 class="about__info-title" id="experience">Стаж</h2>
			<div class="about__info-subtitle" id="experienceStr">1 год</div>
			<h2 class="about__info-title" id="language">Языки</h2>
			<div class="about__info-subtitle">HTML, CSS, JS, PHP</div>
			<h2 class="about__info-title" id="project">Проекты</h2>
			<div class="about__info-subtitle">3</div>
		</div>
	</dir>
</section>
<section class="proj">
	<div class="proj__container">
		<h2 class="proj__container-title" id="myProjTitle"> Мои проекты</h2>
		<div class="proj__table">
			<div class="proj__table-left">
				<img src="src/vtekproj.png" class="proj__table-img">
			</div>
			<div class="proj__table-right">
				<h2 class="proj__table-title" id="projNameOne">Военный архив ГАПОУ ВО ВТЭК</h2>
				<div class="proj__table-subtitle"  id="projDescOne">Данный проект был создан в рамках индивидуального проекта на 1 курсе в 2019 году. Проект заключался в цифровизации информации о героях аойны, работниках тыла и детей войны времен Великой Отечественной войны. Материалы которые были использованны на сайте, хранились в музее первого корпуса колледжа ГАПОУ ВО ВТЭК.
				</div>
				<div class="proj__table-subtitle" id="dlcDescOne" >На данный момент проект больше не поддерживается.</div>
				<div class="proj__table-link"><a target="_blank" href="https://s2d1ent.github.io/vtekstory/" class="proj__table-link" id="dlcLinkOne">Перейти на сайт</a></div>
			</div>
		</div>
		<div class="proj__table_two">
			<div class="proj__table_two-left">
				<h2 class="proj__table-title" id="projNameTwo">LazyCote</h2>
				<div class="proj__table-subtitle" id="projDescTwo">Данный проект представляет собой сайт, который сделан для небольшой команды интузиастов разработчиков. На сайте будут выложены их проекты в сфере разработки, новости их команды,а так же будут присутствовать профили команды.
				</div>
				<div class="proj__table-subtitle" id="dlcDescTwo">На данный момент проект находится в состоянии разработки.</div>
				<div class="proj__table_two-link"><a  target="_blank"href="https://s2d1ent.github.io/LazyCote/" class="proj__table_two-link" id="dlcLinkTwo" >Перейти на сайт</a></div>
			</div>
			<div class="proj__table_two-right">
				<img src="src/lazycote.png" class="proj__table_two-img">
			</div>
		</div>
		<div class="proj__table">
			<div class="proj__table-left">
				<img src="src/uppdd.png" class="proj__table-img" id="img">
			</div>
			<div class="proj__table-right">
				<h2 class="proj__table-title" id="projNameThree">УП ПДД</h2>
				<div class="proj__table-subtitle" id="projDescThree">Данный проект был создан в рамках учебной практики на 2-ом курсе в 2020 году. Данный проект делает упор на простоту графического оформления, а так же удобство его использования как пользователям платформы, так и ее администрации.
				</div>
				<div class="proj__table-subtitle" id="dlcDescThree">На данный момент проект находится во временно замороженном состоянии.<a href="https://yadi.sk/d/CbidN7Z5laTvvw?w=1" target="_blank" class="proj__table-subtitle-a" id="docdlc3">Документация по проекту.</a></div>
				<div class="proj__table-link"><a target="_blank" href="https://github.com/s2d1ent/UPPDD" class="proj__table-link-t" id="dlcLinkThree">Перейти в репозиторий</a></div>
			</div>
		</div>
	</div>
</section>
<section class="footer">
	<footer class="footer__container">
		<ul class="footer__container-ul">
			<li class="footer__container-li_h" id="footerContacts">Мои Контакты</li>
			<li class="footer__container-li">
				<a target="_blank" href="https://vk.com/vornfrosti" class="footer__container-li">VK
				</a>
			</li>
			<li class="footer__container-li">
				<a target="_blank" href="https://twitter.com/s2d1ent" class="footer__container-li">Twitter
				</a>
			</li>
			<li class="footer__container-li">
				<a target="_blank" href="https://github.com/s2d1ent" class="footer__container-li">GitHub
				</a>
			</li>
			<li class="footer__container-li"><a>tumenev33@mail.ru</li>
			<li class="footer__container-li"><a>vornfrost@gmail.com</li>
			<li class="footer__container-li"></li>
		</ul>
		<ul class="footer__container-ul">
			<li class="footer__container-li_h" id="footerProj">Проекты</li>
			<li class="footer__container-li">
				<a href="https://s2d1ent.github.io/LazyCote/" target="_blank" class="footer__container-li">LazyCote
				</a>
			</li>
			<li class="footer__container-li">
				<a href="https://github.com/s2d1ent/UPPDD" target="_blank" class="footer__container-li" id="footerProjNOne">УП ПДД
				</a>
			</li>
			<li class="footer__container-li">
				<a href="https://s2d1ent.github.io/vtekstory/" target="_blank" class="footer__container-li" id="footerProjNTwo">Военный архив
				</a>
			</li>
			<li class="footer__container-li"></li>
		</ul>
		<ul class="footer__container-ul">
			<li class="footer__container-li_h" id="footerMenu">Меню</li>
			<li class="footer__container-li">
				<a href="index.php" target="_blank" class="footer__container-li"  id="footerMain">Главная
				</a>
			</li>
			<li class="footer__container-li">
				<a href="layouts" target="_blank" class="footer__container-li" id="footerLayouts">Макеты
				</a>
			</li>
			<li class="footer__container-li">
				<a href="#" target="_blank" class="footer__container-li" id="footerBuy">Сделать заказ
				</a>
			</li>
			<li class="footer__container-li"></li>
		</ul>
	</footer>
</section>
<?php
if ($_COOKIE["lang"]=="" || $_COOKIE["lang"]=="rus"):
 ?>
 <script type="text/javascript" async src="scripts/rus_lang.js"></script>
 <?php
endif;
 ?>
 <?php
if ($_COOKIE["lang"]=="eng"):
 ?>
 <script type="text/javascript" async src="scripts/eng_lang.js"></script>
 <?php
endif;
 ?>

<script type="text/javascript" async src="scripts/index.js"></script>
</body>
</html>

