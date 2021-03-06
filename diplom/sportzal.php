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
<h1 align="center">Тренировки в спортзале</h1>

<div class="one_block1"><p class="text"><a href="index.php" class="a">Главная </a> <i class="fa fa-long-arrow-right"></i><font color="#000000"> В спортзале </font></p>
<h2>Спортзал для новичков: как начать успешные тренировки</h2>
<h3 align="center">А нужен ли тренер?</h3>
<p class="text">Наставники бывают разные. Объективные показатели профессионализма тренера таковы: наличие профильного высшего образования; стаж работы — чем больше, тем лучше; собственные спортивные заслуги; отменная физическая форма его клиентов; его репутация в клубе. Не стоит требовать, чтобы тренер был в шикарной физической форме и имел привлекательную внешность. Наиболее удачные наставники выглядят как минимум невзрачно, пример — легендарный Алвин Косгроу. Они уже отзанимались спортом в прошлом, да так серьезно, что от тренировок их реально тошнит. Плюс постоянный наплыв клиентов банально не оставляет времени на поддержание формы. Вывод: потратить время на поиски хорошего тренера стоит. Нашел? Бери у него хотя бы 2-3 тренировки в месяц. По московским расценкам это тебе обойдется в 3–9 тыс. руб. в месяц. Ответственный специалист за эти деньги тебе и программу составит, и приглядит краем глаза за ее выполнением.</p>

<h3 align="center"> В какое время лучше тренироваться?</h3>
<p class="text">В рабочие дни — в обеденное, в диапазоне от 13:00 до 16:00. В этот период большинство физических качеств (сила, выносливость, гибкость) проявляются по максимуму, что означает наилучший эффект от занятий. К тому же в это время в фитнес-клубе меньше всего людей. Часы пик, когда в зале лучше не появляться из-за обилия физкультурников, — с 7:00 до 9:00 и с 18:00 до 21:00 в будни и с 9:00 до 16:00 в выходные и праздники. Если тренироваться днем по будням не получается, ходи после работы, но будь готов к тому, что тренировка растянетс­я, поскольку придется ждать, пока освободится тот или иной тренажер.</p>

<h3 align="center"> Что надеть на тренировку?</h3>
<p class="text">Идеальная одежда — футболка с коротким рукавом, шорты или спортивные штаны, кроссовки для фитнеса и, на случай если в зале сильные кондиционеры, теплая толстовка с капюшоном. Учти, что любая спортивная одежда, включая носки, будет вонять, если использовать ее, не стирая, более одного раза! Так что обзаведись двумя-тремя наборами формы, ну и стирай их регулярно. Наколенники, налокотники, напульсники и другая подобная дополнительная экипировка первое время тебе не понадобятся. А тяжелоатлетический пояс и кистевые ремни обычно и так уже есть в зале.</p>

<h3 align="center"> Как еще подготовиться к походу в зал?</h3>
<p class="text">Не помешает прочесть пару книг о фитнесе и методах силовых тренировок. Налегать на сложную научную литературу не надо, достаточно понятных популярных книг. Не думай, что это формальность, которой можно пренебречь. Тренажерный зал, при неосторожном к нему отношении, — опасное место, где здоровье можно не укрепить, как хотелось бы, а загубить окончательно. Нескромно порекомендую тебе свою книгу «Фитнес для умных», вышедшую в 2011 году в серии «Библиотека Men's Health» (ее еще можно найти в магазинах или в сети).</p>

<h3 align="center"> Стоит ли перед началом тренировок обследоваться у врача?</h3>
<p class="text">Нужно! Сегодня (при желании и умениях тренера) можно полноценно тренировать даже умирающего. Главное, получи одобрение врача на походы в зал, если у тебя: проблемы со зрением и сердечно-сосудистой системой, в прошлом (особенно недавнем) случались переломы и операции, если у тебя ненормальное артериальное давление, диабет, астма, заболевания суставов или почек. Даже при наличии серьезных противопоказаний тебе, скорее всего, не запретят тренироваться полностью, а лишь дадут ряд рекомендаций по ограничению тех или иных нагрузок.</p>

<h3 align="center"> Обращать ли внимание на питание?</h3>
<p class="text">Сильно влезать в дебри диетологии не стоит. При грамотной организации тренировочног­о процесса даже простейшее спортивное питание не пригодится как минимум год, а некоторые спортсмены прекрасно без него обходятся, даже соревнуясь на международном уровне. Достаточно приучить себя есть не 1-2 раза в день, а 4-5, и начать завтракать в обязательном порядке. И для правильного старта сразу привыкай к качественной белковой пище и овощам — они составляют основу любой здоровой диеты, независимо от того, набираешь ты вес или скидываешь.</p>
<br />
<hr />
<br />
<h2> <font color="#FF0000">ПРОБЛЕМЫ</font></h2>
<p class="text">С началом тренировок твое тело начнет испытывать непривычные нагрузки и реагировать на них новыми ощущениями. Знай заранее, к чему готовиться.</p>

<h3 align="center">1. Боль в мышцах. Она же «отставленная посттренировочная боль»</h3>

<p class="text">Совершенно не опасна, это лишь небольшое воспаление в местах микротравм мышечных волокон. Как правило, пик тренировочной боли случается спустя 24 часа после тренировки.</p>

<h3 align="center">2. Гипогликемия</h3>
<p class="text">Малоприятное состояние, при котором уровень сахара в твоей крови опасно и быстро снижается. Нередко бывает, что, забыв вовремя поесть, новичок приходит в зал и спустя минут 10–15 тренировки падает в гипогликемический обморок. Всегда полноценно кушай за час-полтора до тренировки и занимайся под руководством опытного тренера, знающего, как вернуть временно «уехавшего» клиента к жизни.</p>

<h3 align="center">3. Небольшое повышение температуры и пульса в покое</h3>
<p class="text">К вечеру после тренировки или даже на следующий день ты можешь почувствовать, что сердце бьется чуть активнее, чем обычно это у тебя происходит в состоянии покоя. Длиться такое состояние может до нескольких часов и связано с метаболическим откликом на чрезмерные нагрузки. Не занимайся слишком интенсивно и в чрезмерно теплой одежде, особенно на ночь.</p>

<h3 align="center">4. Мозоли</h3>
<p class="text">Надеюсь, это тебя не пугает, ведь шершавые ладони с жесткими мозолями — это отличительный признак каждого серьезного атлета. Однако если руки по тем или иным причинам тебе необходимо беречь, то можно использовать специальные снарядные перчатки. Имей в виду, что в перчатках сцепление с грифом штанги чуть хуже, чем при работе голой ладонью. Такова неизбежная плата за комфорт.</p>

<h3 align="center">5. Головокружение</h3>
<p class="text">У большинства новичков есть проблемы с выносливостью сердечно-сосудистой системы, после подходов у них может возникать кратковременное головокружение. Обычно это происходит при переборе с нагрузкой — рабочий вес был слишком тяжелый, повторов сделал слишком много, упражнение выбрал чересчур энергоемкое. Носи на тренировках монитор пульса и старайся не поднимать свою ЧСС выше 140–150 ударов в минуту во время подхода. Как только пульс достиг указанных цифр, сразу завершай подход. И не начинай следующий сет, пока сердце не замедлится до 110 ударов в минуту и ниже.</p>

<h3 align="center">6. Бессонница</h3>

<p class="text">Это первый признак перетренированности или неверного выбора времени тренировок. Закончишь тренировку слишком поздно (менее чем за 2 часа до отхода ко сну) или переборщишь с нагрузками — можешь попрощаться со спокойной ночью. Заканчивай раньше или снижай интенсивность тренировок до тех пор, пока вновь не начнешь спать как убитый.</p>
<br />
<hr />
<br />
<h2>ТРЕНИРОВКА НОВИЧКА</h2>

<p class="text">1. Ни в коем случае не торопись, увеличивай интенсивность постепенно, и неприятные ошибки обойдут тебя стороной.</p>

<p class="text">2. Продолжительность этой тренировки — месяц. Затем занятия можно усложнить, сменив упражнения и увеличив их количество.</p>

<p class="text">Ценные указания Тренируйся 3-4 раза в неделю, занимаясь через день. Обрати внимание: поначалу продолжительность тренировки будет не более 40 минут, но количество подходов будет расти каждую неделю, а с ней и длительность занятий. Последовательность упражнений менять нельзя, точно следуй плану. Выполняй упражнения по порядку, отдыхая между подходами до полного восстановления. И не забывай о разминке: необходимый минимум — 5–10 мин. активной ходьбы на беговой дорожке. После тренировки сделай заминку, спокойно походив на дорожке еще 10–15 мин.</p>
<h3 align="center">Рабочая неделя</h3>
<ul class="rounded">
<li>Разгибания голени в тренажере: 1*10</li>
<li>Сгибания голени в тренажере:1*12</li>	
<li>Жим ногами:1*8</li>	
<li>Жим на грудь в тренажере:1*8	</li>
<li>Вертикальная тяга обратным хватом:1*10</li>	
<li>Отведения с гантелями стоя	1*10</li>	
<li>Скручивания</li>
</ul>
<p class="text">После каждой недели добавляйте по одному подходу к каждому упражнению. Когда число подходов дойдет до 4 в каждом упражнении, со следующей недели убираете до 2 и увеличиваете вес отягащения. Все по кругу</p>
<h3 align="center">1.Разгибания голени в тренажере</h3>
<p class="text"><b>Мышцы: квадрицепсы </b><br />
Сядь на тренажер, установив упор на нижней части голени и прижав спину плотно к спинке устройства. Не разводи сильно в стороны колени, руками держись за рукояти (А). Плавно выпрями ноги, подняв упор тренажера (Б). Подконтрольно вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\razgib.gif" width="400" height="250" /></p>

<h3 align="center">2. Сгибания голени в тренажере</h3>
<p class="text"><b>Мышцы: задней поверхности бедра, голени</b><br /> 
Садись на тренажер так, чтобы его упор пришелся на нижнюю часть твоих голеней чуть выше пяток. Держись за рукояти тренажера и немного согни ноги в коленях (А). Не прогибаясь в пояснице, согни ноги в коленях до упора (Б). Плавно вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\sgib.gif" width="400" height="250" /></p>

<h3 align="center">3. Жим ногами</h3>
<p class="text"><b>Мышцы: квадрицепсы, ягодицы, задней поверхности бедра, голени</b><br /> 
Ляг на тренажер, поставив ступни на платформу чуть шире плеч. Возьмись за рукояти и немного согни ноги в коленях (А). Чуть разводя колени в стороны, согни ноги и опусти платформу на себя как можно ниже, но не отрывай поясницу от спинки тренажера (Б). Мощно выжми платформу, вернувшись в исходное положение. 
Важно: на протяжении всего подхода не выпрямляй ноги до конца.</p>
<p align="center"><img src="images\gim.gif" width="400" height="250" /></p>

<h3 align="center">4. Жим на грудь в тренажере</h3>
<p class="text"><b>Мышцы: грудные, трицепсы, дельтовидные</b><br /> 
Сядь в тренажер, отрегулировав его сиденье так, чтобы рукояти оказались на уровне ниж­ней части твоих грудных мышц. Возьмись за рукояти, разведи локти в стороны, сведи лопатки и подай грудь вперед (А). Не разводя лопаток, выжми рукояти перед собой на почти полностью прямые руки (Б). Плавно вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\gim_gryd.gif" width="400" height="250" /></p>


<h3 align="center">5. Вертикальная тяга обратным хватом</h3>
<p class="text"><b>Мышцы: широчайшие, бицепсы </b><br />
Сядь на тренажер, заведя колени под упоры. Возьмись за рукоять прямым хватом (ладони от себя) на ширине плеч. Направь взгляд вверх и прогнись в грудном отделе позвоночника, подняв грудь. Выпрями руки (А). Опуская плечи, подтяни рукоять к верхней части груди и сведи лопатки (Б). Вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\tyaga.gif" width="400" height="250" /></p>

<h3 align="center">6. Отведения с гантелями стоя</h3>
<p class="text"><b>Мышцы: дельтовидные </b><br />
Встань прямо, ноги на ширине таза, гантели опусти по сторонам, руки немного согни в локтях (А). Не пожимая плеч, подними гантели в стороны (Б). Плавно вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\otvedenie.gif" width="400" height="250" /></p>

<h3 align="center">7. Скручивания</h3>
<p class="text"><b>Мышцы: прямая и косые мышцы живота </b><br />
Ляг на пол, согнув ноги в коленях до прямого угла. Колени соедини вместе, ступни прижми к полу. Ладони подними к лицу и разведи локти в стороны как на фото (А). Напряги мышцы живота и оторви от пола голову и верх спины (Б). Не расслабляя мышц живота, вернись в исходное положение и повтори.</p>
<p align="center"><img src="images\scrychi.gif" width="400" height="250" /></p>
<p align="center"><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /><img src="images/gant.png" height="100" width="100" /></p>
</div>
</article>
<footer><div class="soc"><a href="http://www.vk.com/mr_2000" class="a1"><i class="fa fa-vk fa-3x"></i></a><a href="https://www.youtube.com/channel/UCCWq54FWDmiUU4t6tAMvEug?view_as=subscriber" class="a2"><i class="fa fa-youtube fa-3x"></i></a><a href="https://www.instagram.com/gglazgo/" class="a3"><i class="fa fa-instagram fa-3x"></i></a><a href="https://t.me/gglazgo" class="a4"><i class="fa fa-telegram fa-3x"></i></a></div></footer>
<div class="bottom">2019 Все права защищены. © GymFitLife - Бодибилдинг для начинающих. Политика Конфиденциальности.</div>
</body>
</html>