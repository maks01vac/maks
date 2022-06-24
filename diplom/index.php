<?php
session_start();
require "config.php";

$result1="SELECT * FROM `ip31_glazkov_blog` WHERE `id_st`='Питание' ORDER BY RAND() LIMIT 3";
$quer1 = mysqli_query($connect,$result1);
$result2="SELECT * FROM `ip31_glazkov_blog` WHERE `id_st`='Тренировки' ORDER BY RAND() LIMIT 3";
$quer2 = mysqli_query($connect,$result2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="font_awesome/css/font-awesome.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
  <body>
<div class='vverh'>
	<div id="otstyp"><b><a href="index.php">GymFitLife.ru</a></b></div>
	<div class="regist"><?php if (isset($_SESSION['id'])){ 
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
<h1 align="center">Все о фитнесе</h1>
  <?php if($result1)
{
  $rows =mysqli_num_rows($quer1); // количество полученных строк
  echo'<div class="h2">Питание</div>';
  echo'<div class="one_block">';
  for ($i = 0 ; $i < $rows ; ++$i)
  {
		   $row = mysqli_fetch_row($quer1);
		  echo '<div class="view-glav">
<div class="view view-first">
  <img src="images/'.$row[5].'" width="300px"  height="200px"/>
  <div class="mask">
	<p>'.$row[4].'</p>
	<a href="podrobno.php?kod='.$row[0].'" class="info">Читать дальше</a>
  </div>
</div>
 <p class="text2">'.$row[2].'</p>
</div>';}
echo'</div><hr/>';
  }
?>
<?php if($result2 )
{
  $rows =mysqli_num_rows($quer2); // количество полученных строк
  echo'<div class="h2">Тренировки</div>';
  echo'<div class="one_block">';
  for ($i = 0 ; $i < $rows ; ++$i)
  {
		   $row = mysqli_fetch_row($quer2);
		  echo '<div class="view-glav">
<div class="view view-first">
  <img src="images/'.$row[0].'.jpg" width="300px"  height="200px"/>
  <div class="mask">
	<p>'.$row[4].'</p>
	<a href="podrobno.php?kod='.$row[0].'" class="info">Читать дальше</a>
  </div>
</div>
 <p class="text2">'.$row[2].'</p>
</div>';}
echo'</div><hr/>';
  }
  ?>
  <p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>