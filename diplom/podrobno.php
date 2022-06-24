<?php
session_start();
require"config.php";
$id_st=$_GET['kod'];
$result="SELECT * FROM `ip31_glazkov_blog` WHERE `id`=".$id_st;
//echo($result);
$quer = mysqli_query($connect,$result);
$row = mysqli_fetch_array($quer);
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
		  echo('<li><a href="dobavit.php" class="submenu-link">Добавить запись</a></li>');;
	  }?>
    </ul>
  </nav></header>
<article>
<br />
<br />
<h1 align="center">Статьи</h1>
<p class="text"><a href="index.php" class="a">Главная</font></a> <i class="fa fa-long-arrow-right"></i> <a href="statii.php" class="a">Статьи</a> <i class="fa fa-long-arrow-right"></i> <?php echo'<font color="#000000">'.$row[2].'</font>'?></p>
<?php
echo'<br/><br/>
<div class="h_st"><img src="images/icon.png" width="60px" height="60px"><p>'.$row[2].'</p></div>
<br/><br/>
<div class="blog"><p class="p_blog"><img src="images/'.$row[5].'" height="200px" width="300px" style="float:left; margin-right:10px;">'.$row[3].'</p>
</div>';
?>

<br />
<hr />
<br />

<p class="pred"><a class="a" href="podrobno.php?kod=<?=$id_st-1?>"><< Предыдущая статья</a></p><p class="sled"><a class="a" href="podrobno.php?kod=<?=$id_st+1?>">Следующая статья >></a></p><br /><br /><br /><br />
<?
if(isset($_GET['comment']))
	{
		if(isset($_SESSION['id'])){
			$com=$_GET['comment'];
			$id_pol=$_SESSION['id'];
			$d=@date('Y-m-d');
			$t=@date('h:i:s');
			$time=$d.' '.$t;
			$qu=mysqli_query($connect,"INSERT INTO `ip31_glazkov_comments`( `comment`, `id_str`, `id_pol`,`date`) VALUES ('".$com."','".$id_st."','".$id_pol."','".$time."')");
		}
		else{
		echo('<h2><font color="#FF0000"><u>АВТОРИЗУЙТЕСЬ!!!</u></font></h2>');
		}
	}
	$coment="
	SELECT 
		ip31_glazkov_users.name, ip31_glazkov_comments.date, ip31_glazkov_comments.comment 
	FROM 
		ip31_glazkov_users,ip31_glazkov_comments 
	WHERE 
		ip31_glazkov_comments.id_pol=ip31_glazkov_users.id 
		AND ip31_glazkov_comments.id_str='".$id_st."' 
		ORDER BY ip31_glazkov_comments.id DESC
";
	$quer1=mysqli_query($connect,$coment);
	?>

<form class="decor" method="GET" action="podrobno.php">
  <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
    <h2>Добавить комментарий</h3>
    <textarea placeholder="Комментарий..." name="comment" rows="3"></textarea>
    <input type="submit" class="buttom" value="Добавить комментарий">
    <input type="hidden" name="kod" value="<?=$id_st?>" />
  </div>
</form>
<a href="top"></a>
<?php 
while ($p=mysqli_fetch_array($quer1))
    {
			 echo'<div class="comment"><h3>'.$p[0].'</h3><p class="text1">Время публикации: '.$p[1].'</p><p class="text">'.$p[2].'</p></div>';
   }
?>
<p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>
