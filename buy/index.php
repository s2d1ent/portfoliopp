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
<link rel="stylesheet" href="../style/buy.css" id="css"> 
<?php 
	if ($_COOKIE["color"]=="black"):
 ?>
<link rel="stylesheet" href="../style/black.css"> 
<?php 
	endif;
 ?>
<link rel="stylesheet" href="../style/buy_mobile.css" id="css"> 
<link rel="shortcut icon" href="../src/s2dLogo.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body id="body">
	<header id="header">
		<a href="/"><img src="../src/s2dLogo.png" class="logo"></a>
		<nav id="nav">
			<a href="/" class="nav-a" id="navIndex">Главная</a>
			<a href="../layouts" class="nav-a"  id="navLayout">Макеты</a>
			<a href="#" class="nav-a" id="navBuy">Сделать заказ</a>
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
		<button name="lang_eng" id="lang_eng" style="outline: none; border: none;">Рус</button>
			</form>
	</header>
<section class="mobile__menu">
	<div class="mobile__menu-container">
		<a href="/"><img src="../src/mobile__icon_index_black.png" class="mobile__menu-img"></a>
		<a href="../layouts"><img src="../src/mobile__icon_layouts_black.png" class="mobile__menu-img"></a>
		<a href="#"><img src="../src/mobile__icon_buy_black.png" class="mobile__menu-img"></a>
		<button name="lang_eng" id="lang_eng" style="outline: none; border: none;">Рус</button>
			</form>
	</div>
</section>
<h1 class="title" id="title">  Заполните форму</h1>
<div class="subtitle" id="subtitle">В третьем поле опишите ваши пожедания по поводу проекта. Как доп материалы для проекта, вы можете приложить проект из Figma, Adobe Photoshop, docx, pdf, любые виды картинок и архивы.</div>
<section class="form">
	<div class="form__container">
		<form action="../php/buy__form.php" class="form__container-form" method="POST" enctype="multipart/form-data">
			<input type="name" name="name" placeholder="Имя" class="form__text" required>
			<input type="email" name="email" placeholder="email" class="form__text" required>
			<textarea name="text" class="form__textarea" placeholder="Введите ваше сообщение" required></textarea>
			<input type="file" name="file" class="form__file" multiple accept="image/*,video/none,.docx,.psd,.svg,.fig,.zip">
			<input type="submit" name="send" class="form__btn">
		</form>
	</div>
</section>
<section class="footer">
	<footer class="footer__container">
		<ul class="footer__container-ul">
			<li class="footer__container-li_h">Мои Контакты</li>
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
			<li class="footer__container-li_h">Проекты</li>
			<li class="footer__container-li">
				<a href="https://s2d1ent.github.io/LazyCote/" target="_blank" class="footer__container-li">LazyCote
				</a>
			</li>
			<li class="footer__container-li">
				<a href="https://github.com/s2d1ent/UPPDD" target="_blank" class="footer__container-li">УП ПДД
				</a>
			</li>
			<li class="footer__container-li">
				<a href="https://s2d1ent.github.io/vtekstory/" target="_blank" class="footer__container-li">Военный архив
				</a>
			</li>
			<li class="footer__container-li"></li>
		</ul>
		<ul class="footer__container-ul">
			<li class="footer__container-li_h">Меню</li>
			<li class="footer__container-li">
				<a href="index.php" target="_blank" class="footer__container-li">Главная
				</a>
			</li>
			<li class="footer__container-li">
				<a href="layouts" target="_blank" class="footer__container-li">Макеты
				</a>
			</li>
			<li class="footer__container-li">
				<a href="#" target="_blank" class="footer__container-li">Сделать заказ
				</a>
			</li>
			<li class="footer__container-li"></li>
		</ul>
	</footer>
</section>


<?php
if ($_COOKIE["lang"]=="" || $_COOKIE["lang"]=="rus"):
 ?>
 <script type="text/javascript" async src="rus_lang.js"></script>
 <?php
endif;
 ?>
 <?php
if ($_COOKIE["lang"]=="eng"):
 ?>
 <script type="text/javascript" async src="eng_lang.js"></script>
 <?php
endif;
 ?>

<script type="text/javascript" async src="scripts/index.js"></script>
<script type="text/javascript" async src="scripts/changecolor.js"></script>
</body>
</html>