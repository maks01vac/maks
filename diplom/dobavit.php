<?php
session_start();
require"config.php";
      $kart="SELECT max(`id`) FROM `ip31_glazkov_blog`";
	  $query_kart=mysqli_query($connect,$kart);
	  $array_kart=mysqli_fetch_array($query_kart);
	  $last_id = $array_kart[0]+1;
	  //echo $last_id;	
if(isset($_POST['submit']))
	{  
	
		$title=trim(htmlspecialchars($_POST['title']));
		$id_st=trim(htmlspecialchars($_POST['id_st']));
		$low_cont=trim(htmlspecialchars($_POST['low_content']));
		$cont=trim($_POST['content']);
		
		// если была произведена отправка формы
    if(isset($_FILES['file'])) {
      // проверяем, можно ли загружать изображение
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        // загружаем изображение на сервер
        $f_name=make_upload($_FILES['file'],$last_id);
		//echo $f_name;
		$query5=mysqli_query($connect,"INSERT INTO `ip31_glazkov_blog`( `title`, `id_st`, `low_content`, `content`, `name_img`) VALUES ('".$title."','".$id_st."','".$low_cont."','".$cont."','".$f_name."')");
        echo "<strong>Файл успешно загружен!</strong>";
      }
      else{
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
		  
      }
    }
		echo($query5);
		header("Location:index.php");
		if(!$query5)
			 {
				 print "Не удалось добавить запись";
		}
	}
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
		  echo('<li><a href="dobavit.php" class="submenu-link">Добавить запись</a></li>');
	  }?>
    </ul>
  </nav></header>
<article>
<br />
<br />
<h1 align="center">Статьи</h1>
<p class="text"><a href="index.php" class="a">Главная</a>  <i class="fa fa-long-arrow-right"></i>  <font color="#000000">Добавить запись</font></p>
<div class="autoriz">
 <form action="dobavit.php" enctype="multipart/form-data" method="POST" class="ui-form">
  <h3>Добавить новую статью</h3>
   <div class="form-row">
   
    <input type="text" id="title" name="title" autofocus="autofocus" required autocomplete="off"><label for="title">Название статьи</label>
  </div>
  <br />
   <br />
   <div class="form-row"><label for="title">Раздел</label>
  <div class="select">
   <select name="id_st">
   <option value="Питание">Питание</option>
   <option value="Тренировки">Тренировки</option>
   </select>
   </div></div>
  <br />
   <br />
   <div class="form-row">
     <label for="low_content">Краткое содержание</label><textarea id="low_content" name="low_content" cols="60" rows="9" ></textarea>
  </div>
  <br />
   <br />
  <div class="form-row">
    <label for="content">Статья</label><textarea name="content" cols="60" rows="30" ></textarea>
  </div>
   <div class="example-2">
  <div class="form-group">
    <input type="file" name="file" id="file" class="input-file">
    <label for="file" class="btn btn-tertiary js-labelFile">
      <i class="icon fa fa-check"></i>
      <span class="js-fileName">Загрузить фотографию</span>
    </label>
  </div>
 </div>
 <br />
 <br />
  <p><input type="submit" name="submit" value="Добавить статью" class="buttom"></p>
</form>
 <p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</div>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>
<?php
  function can_upload($file){
	// если имя пустое, значит файл не выбран
    if($file['name'] == '')
		return 'Вы не выбрали файл.';
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
		return 'Файл слишком большой.';
	
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }
  
  function make_upload($file, $id){	
	// формируем уникальное имя картинки: случайное число и name
	$getMime1 = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime1 = strtolower(end($getMime1));
	$name = $id.'.'.$mime1;
	copy($file['tmp_name'], 'images/' . $name);
	return $name;
  }
  ?>