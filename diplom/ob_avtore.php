<?php
session_start();
require"config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
<link rel="stylesheet" href="font_awesome/css/font-awesome.min.css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class='vverh'>
	<div id="otstyp"><b><a href="index.php">GymFitLife.ru</a></b></div>
    <div class="regist"><b><a href="reg.php" ><?php if (isset($_SESSION['id'])){ 
	$imya="SELECT name FROM `ip31_glazkov_users` WHERE `id`=".$_SESSION['id'];
	$imya1=mysqli_query($connect,$imya);
	$mas_imya=mysqli_fetch_array($imya1);
	echo('<p><b>Здраствуйте, '.$mas_imya[0].'</p> |<a href="vihod.php"> Выход </a></b></p>');
	}
	else
	{
		echo('<p><b><a href="reg.php">Регистрация</a> | <a href="autoriz.php"> Вход </a></b></p>');
	}
		?></b></div>
</div>
<header><nav>
    <ul class="topmenu">
      <li><a href="ob_avtore.php">Об авторе</a></li>
      <li><a href="tren.php" class="submenu-link">Тренировки</a>
        <ul class="submenu">
           <li class='submen'><a href="sportzal.php">В спортзале</a></li>
		  <li class='submen'><a href="home.php">Дома</a></li>
        </ul>
      </li>
      <li><a href="pit.php" class="submenu-link">Питание</a>
       <ul class="submenu">
        <li class='submen'><a href="nabor.php">Набор массы</a></li>
		  <li class='submen'><a href="sushca.php">Жиросжигание и рельеф</a></li>
		  <li class='submen'><a href="podder.php">Поддержание формы</a></li>
        </ul></li>
      <li><a href="statii.php">Рубрики</a></li>
      <?php if($_SESSION['id']==1){
		  echo("<li><a href='dobavit.php' class='submenu-link'>Добавить запись</a></li>");
	  }?>
    </ul>
  </nav></header>
<article>
<br />
<br />
<h1 align="center">Об авторе</h1>
<p class="text"><a href="index.php" class="a">Главная</a> <i class="fa fa-long-arrow-right"></i> <font color="#000000">Об авторе</font></p>

<div class="one_block1">
<h2>Максим Глазков</h2>
<p class="text">Всем привет, благодарю что посетили мой сайт, меня зовут Максим Глазков. Я сам занимаюсь в сфере фитнеса и бодибилдинга примерно полтора года. Да может показаться, что я очень не опытен, но я за все это время много чему научился, делал много выводов исходя из своего наверно маленького, но все же чего-то стоящего опыта. Все эти последние 1,5 года я посвятил себя не только трансформации, но и глубоку изучению вопросов тренировок и питания, пробовал много схем и вариантов.</p>
<br />
<p class="text"> На этом сайте вы найдете, наверно, все что вы заинтересует в сфере фитнеса. Я вас научу, как правильно питаться, и делать так чтобы вам это нравилось. Научу как очень просто самому стоить тренировки, опирайсь только на свой собственный организм, ведь мы все знаем, что каждый из нас индивидуален, и каждому нужна свой схема тренинга. Ознакомясь с информацией на этом сайте вы будете вполне готовы без чьей либо помощи сами менять свое тело, в зависимости от ваших предпочтений. Присутствует информация не только для мужчин, но и женщин, потому что некоторые аспекты в тренировках девушек все-таки отличаюся от мужских. Надеюсь вы найдете, то что ищете и удачи вам в вашей трансформации и переменах в образе жизни.
</div>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>