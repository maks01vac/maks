<?php
session_start();
require"config.php";
if(isset($_SESSION['id'])){
	header("Location:index.php");
}
else{
	if(isset($_POST['submit']))
	{
		$email=trim(htmlspecialchars($_POST['email']));
		$password=trim(htmlspecialchars($_POST['password']));
		$q="SELECT * FROM `ip31_glazkov_users` WHERE`email`='".$email."' AND `password`='".$password."'";
		$query1=mysqli_query($connect,$q);
		//$users=mysql_fetch_array($query1);
		if(mysqli_num_rows($query1)>0)
		{
			$users=mysqli_fetch_array($query1);
			$_SESSION['id']=$users[0];
			header("Location:index.php");
		}
		else 
		{
			print "Введены неверно данные";
		}
	}
	//print_r($users);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="font_awesome/css/font-awesome.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class='vverh'>
	<div id="otstyp"><b><a href="index.php">PersonFit</a></b></div>
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
    </ul>
  </nav></header>
<article>
<br />
<br />
<h1 align="center">Авторизация</h1>
<p class="text"><a href="index.php" class="a">Главная</a>  <i class="fa fa-long-arrow-right"></i>  <font color="#000000">Авторизация</font></p>
<div class="autoriz">
 <form action="autoriz.php" method="POST" class="ui-form">
  <h3>Войти на сайт</h3>
   <div class="form-row">
    <input type="text" id="email" name="email" autofocus="autofocus" required autocomplete="off"><label for="email">Email</label>
  </div>
  <br />
   <br />
  <div class="form-row">
    <input type="password" id="password" name="password" required autocomplete="off"><label for="password">Пароль</label>
  </div>
  <p><input type="submit" name="submit" value="Войти" class="buttom"></p>
</form>
<a href="reg.php" id="reg"><font size="5">Вы еще не зарегистриловались?</font></a>
 <p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</div>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>
<?php
}
?>