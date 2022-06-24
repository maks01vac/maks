<?php
session_start();
require"config.php";
$perpage = 9; // Количество отображаемых данных из БД
if (empty($_GET['page']) || ($_GET['page'] <= 0)) 
	{
		$page = 1
	;
	}
else 
	{
		$page = (int) $_GET['page']; // Считывание текущей страницы
	}
$count = mysqli_num_rows(mysqli_query($connect,'select * from `ip31_glazkov_blog`')) or die('error! Записей не найдено!');
$pages_count = ceil($count / $perpage); // Количество страниц	
// Если номер страницы оказался больше количества страниц
if ($page > $pages_count) $page = $pages_count;
$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД
//echo $start_pos;
$result="SELECT * FROM `ip31_glazkov_blog` ORDER BY `id` DESC LIMIT ".$start_pos.", ".$perpage;
$quer = mysqli_query($connect,$result) or die("Ошибка " . mysql_error($db));
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
    <div class="regist"><b><a href="reg.php"><?php if (isset($_SESSION['id'])){ 
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
      <li><a href="tren.php" class="clk">Тренировки</a>
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
		  echo('<li><a href="dobavit.php" class="submenu-link">Добавить запись</a></li>');;
	  }?>
    </ul>
  </nav></header>
<article>
<div class="statii">
<br />
<br />
<h1 align="center">Рубрики</h1>
<?php if($result)
{
    $rows = mysqli_num_rows($quer); // количество полученных строк
	echo'<div style="margin:auto; height:30px; width:85%"><p class="text"><a href="index.php" class="a"><font color="#0066CC">Главная</font></a> <i class="fa fa-long-arrow-right"></i> <font color="#000000">Статьи</a></p></div><div class="one_block1">';
    for ($i = 1 ; $i < $rows+1 ; ++$i)
    {
			 $row = mysqli_fetch_row($quer);
			echo '<div class="view-glav">
<div class="view view-first">
    <img src="images/'.$row[5].'" width="300px"  height="200px"/>
    <div class="mask">
      <p>'.$row[4].'</p>
      <a href="podrobno.php?kod='.$row[0].'" class="info">Читать дальше</a>
    </div>
  </div>
  <div class="view_text">
   <p class="text2">'.$row[2].'</p>
   </div>
  </div>';
   if (($i%3) == 0 && $i!==$rows){
	   echo'</div><br/><hr/><div class="one_block1">';
   }
   }
  echo'</div>';
    }?>
    <br /><hr />
    <br/>
<br />
    <div class="poisk">
 <?php
link_bar($page, $pages_count);
?>
</div><br />
<br />
<br />
<br />
</div>
</article>
<footer><div class="soc"><a href="#" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="#" class="a2"><i class="fa fa-google-plus fa-3x"></i></a><a href="#" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="#" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div>
</footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
<?
  function link_bar($page, $pages_count)
{
	for ($j = 1; $j <= $pages_count; $j++)
	{
// Вывод ссылки
		if ($j == $page) 
		{
			echo '<a class="navig"><b>'.$j.'</b></a>';
		} 
		else 
		{
			echo '<a class="navig" href='.$_server['php_self'].'?page='.$j.'>'.$j.'</a>';
		}
// Выводим разделитель после ссылки, кроме последней
// например, вставить "|" между ссылками
		if ($j != $pages_count) echo '&nbsp;   &nbsp;';
	}
	return true;
} // Конец функции
?>
</body>
</html>