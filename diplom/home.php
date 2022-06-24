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
<h1 align="center">Тренировки дома</h1>


<div class="one_block1"><p class="text"><a href="index.php" class="a">Главная </a> <i class="fa fa-long-arrow-right"></i> <font color="#000000">Дома</font></p>
<p class="text">Хотите похудеть и думаете, с чего можно начать тренировки дома? Или желаете улучшить свою физическую подготовку и иметь более спортивное и подтянутое тело? Предлагаем вам готовый план тренировки дома для начинающих с наглядными иллюстрациями упражнений и расписанием занятий, которая поможет вам похудеть и избавиться от проблемных зон.</p>

<p class="text">Регулярные спортивные нагрузки необходимы, даже если у вас нет лишнего веса. Во-первых, это укрепление мышц и развитие мышечной выносливости, что поможет вам без труда выдерживать любую физическую активность в обычной жизни. Во-вторых, это развитие сердечно-сосудистой системы и тренировка сердечной мышцы, что снижает риск развития многих заболеваний, в том числе инфарктов и инсультов. В-третьих, тренировки способствуют выработки гормонов счастья (эндорфинов), благодаря которым уменьшается риск развития депрессий и подавленного состояния. В-четвертых, регулярные спортивные нагрузки стимулируют человека вести здоровый образ жизни без вредных привычек.</p>
<h2>Тренировка дома для начинающих: общие правила</h2>
<p class="text">В домашних условиях можно организовать вполне эффективные тренировки для похудения, причем для этого вам не понадобится особенный инвентарь и даже какой-либо опыт в фитнесе. Если выбрать доступную программу упражнений и заниматься регулярно, то вы сможете достигнуть результатов, даже если никогда не тренировались раньше. Мы предлагаем вам готовый план круговой домашней тренировки для начинающих, с помощью которой вы избавитесь от лишнего веса и улучшите качество тела.</p>

<p class="text">Преимущества данной тренировки дома для начинающих:</p>
<ul class="rounded">
<li>тренировка поможет вам похудеть и подтянуть тело;</li>
<li>занятие подходит новичкам и тем, кто долго не тренировался;</li>
<li>с этой программы можно начать тренироваться дома;</li>
<li>программа включает в себя упражнения для всех основных групп мышц;</li>
<li>они помогут вам укрепить мышцы и избавиться от проблемных зон;</li>
<li>большинство предлагаемых упражнений – низкоударные;</li>
<li>вам понадобится минимальный инвентарь.</li>
</ul>
<p class="text">Прежде чем перейти непосредственно к списку упражнений, обязательно ознакомьтесь с рекомендациями и правилами, которые позволят вам тренироваться качественно и эффективно.</p>

<p class="text">Правила тренировки дома для начинающих:</p>
<ul class="rounded">
 <li>Начинайте эту домашнюю тренировку для начинающих с разогревающей разминки и заканчивайте растяжкой всего тела. 
 Всегда занимайтесь в кроссовках; нельзя тренироваться дома босиком, если не хотите получить проблемы с суставами.
 Старайтесь не есть минимум за час до тренировки, иначе могут возникнуть проблемы с пищеварением. Через полчаса после тренировки съешьте белок + углеводы (например, 150 г творога + фрукт).</li>

 <li>За 20 минут до тренировки выпейте стакан воды и пейте воду небольшими глотками каждые 10 минут в течение занятия. После тренировки выпейте стакан воды.</li>

 <li>Предложенная тренировка для начинающих состоит из двух раундов по 6 упражнений в каждом раунде. Каждый раунд повторяется в 2 круга. Если вам тяжело выдержать тренировку от начала и до конца, можете взять 5-минутный отдых между раундами или сократить продолжительность программы.</li>

 <li>Данная тренировка для начинающих предполагает использование таймера (каждое упражнение выполняется 30 секунд). Но если вам неудобен такой формат, можете выполнять упражнения на счет: по 15-20 повторений каждого упражнения.</li>

<li>В этой программе есть упражнения, которые предполагают выполнение на разные стороны: сначала на правую, потом на левую (например, выпады, подъемы ног, приведение бедра на боку). Рекомендуем разделить выполнение на 2 круга, т.е. в первом круге вы выполняете упражнения на одну сторону, во втором круге – на другую сторону. Но если вы хотите усложнить тренировку и увеличить ее продолжительность, можете выполнять упражнения на обе стороны в каждом круге.</li>

<li>Продолжительность этой тренировки дома для начинающих – 20-25 минут (без учета разминки и заминки). Вы всегда можете скорректировать время занятий на свое усмотрение, добавив или уменьшив количество кругов. Остановитесь и прекратите тренировку, если почувствовали головокружение, слабость или боли в сердце.</li>

<li>В некоторых упражнениях для начинающих вам понадобятся гантели. Если у вас их нет, вы можете использовать пластиковые бутылки с водой (1-1,5 литра) или выполнять упражнения без дополнительного веса. Если в каких-то упражнениях вам, наоборот, не хватает нагрузки, можете использовать гантели, фитнес-резинку, утяжелители для ног или эспандер.</li>

 <li>Этот комплекс тренировок для начинающих разбит на 3 дня. Вы можете тренироваться 3-5 раз в неделю в зависимости от ваших целей и возможностей – просто чередуйте 3 готовых плана между собой. Через 3-4 недели выполнения желательно увеличить время выполнения упражнений</li>
</ul>
<h2>Тренировка для начинающих дома: план упражнений</h2>
<p class="text">Итак, предлагаем вам тренировку дома для начинающих, которая выполняется по круговому принципу. Выполняйте последовательно предложенные упражнения в течение указанного времени, упражнения выполняются в один подход с небольшим отдыхом между подходами. За счет чередований кардио и силовых упражнений вы будете повышать пульс и сжигать больше калорий, а также тонизировать мышцы. Если вы хотите контролировать частоту пульса и количество сожженных калорий за занятие, то можно приобрести пульсометр.</p>

<p class="text">Как выполнять тренировку:</p>
<ul class="rounded">
<li>каждое упражнение выполняем 30 секунд;</li>
<li>перерыв после каждого упражнения 15 секунд (можно увеличить до 30 секунд, если у вас слабое сердце или низкая выносливость);</li>
<li>каждый раунд повторяем в 2 круга;</li>
<li>между кругами отдых 1 минута, между раундами – 2 минуты;</li>
<li>если вам дискомфортно выполнять какое-то упражнение, то замените или пропустите его.</li>
</ul>
<h3 align="center">Программа тренировок для дома: какие упражнения можно выполнять</h3>
<p class="text">Наличие инвентаря и траты на его покупку это основная затыка при выборе квартиры в качестве персонального зала. Однако затыка это кажущаяся, ибо и дома (без тренажерного инвентаря) можно качественно нагрузить все свое тело, нужно только знать как.</p>


 
<p class="text">И в этом нам помогут следующие упражнения:</p>
<ul class="rounded">
<li>отжимания вниз головой стоя у стены;</li>
<li>обратная гиперэкстензия лежа на скамье/стульях и супермен;</li>
<li>отжимания от пола стандартным/широким хватом;</li>
<li>отжимания узким хватом/хватом daimond от пола/обратные отжимания;</li>
<li>фронтальная планка/боковая планка, складной ножик, велосипед, обратные кранчи;</li>
<li>приседания с узкой постановкой ног, выпады на месте ;</li>
<li>доброе утро с палкой;</li>
<li>приседания с широкой постановкой ног, ягодичный мостик, отведение ноги назад с упором на руки;</li>
<li>плие приседания, выпады в стороны, отведение верхней/нижней ног вверх лежа на боку;</li>
<li>подъемы на носки стоя/сидя с палкой на коленях;</li>
</ul>
<p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</div>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>