-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2022 г., 21:51
-- Версия сервера: 5.6.51
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ip31_glazkov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ip31_glazkov_blog`
--

CREATE TABLE `ip31_glazkov_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_st` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `low_content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name_img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ip31_glazkov_blog`
--

INSERT INTO `ip31_glazkov_blog` (`id`, `title`, `id_st`, `content`, `low_content`, `name_img`) VALUES
(1, 'Жир', 'Питание', 'укпукпрцукр3г4кп3ь4упшт34зпьло3т4паь34шьпа34шпьа3шкопьшукопь34щп34', 'ПАУЦРШАПГУПРШПМТШЩПТ', '1.jpg'),
(2, 'Жир', 'Тренировки', 'укпукпрцукр3г4кп3ь4упшт34зпьло3т4паь34шьпа34шпьа3шкопьшукопь34щп34', 'ПАУЦРШАПГУПРШПМТШЩПТ', '1.jpg'),
(3, 'Жиробасина', 'Питание', 'Я не шучу, надо меньше жрать', 'Меньше надо жрать', '3.jpg'),
(4, 'ПЕРИОДИЗА́ЦИЯ', 'Тренировки', 'Блоки периодизации не только неизбежно пересекаются, они часто кажутся конфликтующими или противоречащими друг другу. Некоторые из них имеют культурное значение (\"Золотой век\"), другие относятся к выдающимся историческим событиям (\"Межвоенные годы: 1918-1939\"), а третьи определяются десятичной системой счисления (\"1960-е годы\", \"17-й век\"). Другие периоды названы в честь влиятельных или талисманных личностей (‘викторианская эпоха’, ‘Эдвардианская эпоха\" и \"наполеоновская эпоха\").\r\n\r\nНекоторые из этих обычаев также будут географически специфичны. Это особенно верно для периодизации ярлыков, полученных от отдельных лиц или правящих династий, таких как эпоха Джексона в Америке, эпоха Мэйдзи в Японии или период Меровингов во Франции. Культурные термины также могут иметь ограниченный охват. Таким образом, понятие \"романтический период\" в значительной степени бессмысленно за пределами западного мира Европы и культур, находящихся под влиянием Европы. Аналогично, \"1960-е\", хотя технически применимо к любой точке мира в соответствии с общей нумерацией эпох, имеет определенный набор специфических культурных коннотаций в определенных странах. По этой причине можно сказать, что “1960-х годов в Испании никогда не было”. Это означало бы, что сексуальная революция, контркультура, молодежные восстания и так далее никогда не развивались в течение этого десятилетия в консервативной римско-католической культуре Испании и при авторитарном режиме Франсиско Франко. Точно так же очень часто говорят, как историк Артур Марвик, что \"1960-е\" начались в конце 1950-х и закончились в начале 1970-х годов. Он говорит это потому, что культурные и экономические условия, определяющие значение периода, охватывают нечто большее, чем случайный факт 10-летнего блока, начинающегося с цифры 6. Это расширенное использование называется \"долгими 1960-ми’. Это использование происходит от других историков, которые приняли такие ярлыки, как “долгий 19-й век” (1789-1914), чтобы согласовать произвольную десятичную хронологию со значимыми культурными и социальными фазами. Аналогичным образом, восемнадцатый век может охватывать 1714-1789 годы. Эрик Хобсбаум также выступал за то, что он называет “коротким двадцатым веком”, охватывающим период от Первой мировой войны до конца холодной войны.\r\n\r\nАналогичные проблемы возникают и у других лейблов. Можно ли использовать термин \"викторианский\" за пределами Британии, и даже в пределах, является ли ее правление 1837-1901 гг. полезным историческим периодом? Иногда используется, когда считается, что его коннотации с пользой описывают политику, культуру и экономические условия, характерные для последних двух третей девятнадцатого века. Тем не менее, термины периодизации часто имеют отрицательные или положительные коннотации, которые могут повлиять на их использование. Сюда входит викторианский период, который часто негативно предполагает сексуальные репрессии и классовые конфликты. Другие лейблы, такие как Renaissance, имеют ярко выраженные положительные характеристики. В результате эти термины иногда расширяются по значению. Таким образом, английское возрождение часто используется для обозначения периода, во многом идентичного елизаветинскому периоду или царствованию Елизаветы I, и начинается примерно на 200 лет позже итальянского Возрождения. Однако считается, что каролингский ренессанс произошел во время правления франкского короля Карла Великого и его непосредственных преемников. Другими примерами, ни один из которых не представлял собой \"возрождение\" в смысле возрождения, являютсяАмериканский ренессанс 1820-60–х годов, относящийся в основном к литературе, и Гарлемский ренессанс 1920-х годов, относящийся в основном к литературе, но также к музыке и изобразительному искусству.\r\n\r\nКонцепция ‘возрождения\" классического латинского языка впервые приписывается итальянскому поэту Петрарке (1304-1374), отцу гуманизма эпохи Возрождения, но концепция возрождения широко используется со времен Петрарки. Доминирующее использование слова Ренессанс относится к культурным изменениям, произошедшим в Италии, кульминацией которых стало Высокое Возрождение около 1500-1530 годов. Эта концепция в основном применима к изобразительному искусству, а также к творчеству Микеланджело, Рафаэля и Леонардо да Винчи. Во-вторых, она применяется к другим видам искусства, но сомнительно, полезно ли это для описания этапа в экономической, социальной и политической истории. Многие профессиональные историки в настоящее время ссылаются на исторические периоды, широко известные как Ренессанс и Реформация, как на начало раннего современного периода, который простирается намного позже. В преподаваемых курсах и публикуемых книгах происходят постепенные изменения в соответствии с изменением номенклатуры периодов, что частично отражает различия между социальной историей и историей культуры. Новая номенклатура предполагает более широкий географический охват и растущее внимание к отношениям между Европой и остальным миром.\r\n\r\nТермин Средние века также происходит от Петрарки. Он сравнивал свой собственный период с античным или классическим миром, рассматривая свое время как время возрождения после темного промежуточного периода, средневековья. Идея о том, что средние века были промежуточной фазой между двумя другими масштабными периодизационными концепциями, Древними и современными, все еще сохраняется. Его можно подразделить на раннее, высокое и позднее средневековье. Термин \"Темные века\" больше не используется современными учеными из-за трудности его нейтрального использования, хотя некоторые авторы пытались сохранить его и избавить от негативных коннотаций. Термин \"средневековье\" и особенно прилагательное средневековый также могут иметь негативный оттенок в разговорном употреблении (\"варварское обращение с заключенными в такой-то тюрьме почти средневековое\"), но это не переносится на академическую терминологию. Однако другие термины, такие как готическая архитектура, используемые для обозначения стиля, типичного для высокого Средневековья, в значительной степени утратили негативные коннотации, которые они изначально имели, со временем приобретая новые значения (см. Готическая архитектура и готическая субкультура).\r\n\r\nГотика и барокко были названы в последующие стилистические периоды, когда предыдущий стиль был непопулярен. Слово \"готический\" было применено как уничижительный термин ко всему североевропейскому и, следовательно, варварскому, вероятно, впервые Джорджо Вазари. Вазари также приписывают первое использование термина \"Ренессанс\" (rinascita) для описания периода, в течение которого он был искусствоведом, художником и архитектором. Джорджо Вазари ввел термин \"готический\" в попытке описать, в частности, архитектуру, которую он счел неприемлемой, якобы сказав: \"как будто это построили готы\". Слово \"барокко\", образованное от аналогичных слов в португальском, испанском или французском языках, буквально обозначает жемчужину неправильной или деформированной формы. Его первое использование за пределами ювелирного производства было в начале 18 века, как критика музыки, которая считалась чрезмерно сложной и грубой. Позже этот термин также использовался для описания архитектуры и искусства.[2] Период барокко был впервые обозначен как таковой в 19 веке, и обычно считается, что он начался около 1600 года во всех средствах массовой информации. История музыки относит конец периода к 1750 году со смертью Дж.Бах', 'Периодизация-это процесс или исследование категоризации прошлого на дискретные, количественно определенныпроцессов и причинно-следственных связей, которые могли бы связать эти события.', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ip31_glazkov_comments`
--

CREATE TABLE `ip31_glazkov_comments` (
  `id` tinyint(4) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_str` tinyint(4) NOT NULL,
  `id_pol` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ip31_glazkov_comments`
--

INSERT INTO `ip31_glazkov_comments` (`id`, `comment`, `id_str`, `id_pol`, `date`) VALUES
(1, 'привет', 3, 1, '2022-06-24 09:06:21'),
(2, 'Привет', 4, 1, '2022-06-24 09:13:18');

-- --------------------------------------------------------

--
-- Структура таблицы `ip31_glazkov_users`
--

CREATE TABLE `ip31_glazkov_users` (
  `id` tinyint(10) UNSIGNED NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ip31_glazkov_users`
--

INSERT INTO `ip31_glazkov_users` (`id`, `email`, `name`, `password`) VALUES
(1, 'maks01vac@gmail.com', 'Maks', 123);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ip31_glazkov_blog`
--
ALTER TABLE `ip31_glazkov_blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ip31_glazkov_comments`
--
ALTER TABLE `ip31_glazkov_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ip31_glazkov_users`
--
ALTER TABLE `ip31_glazkov_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ip31_glazkov_blog`
--
ALTER TABLE `ip31_glazkov_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ip31_glazkov_comments`
--
ALTER TABLE `ip31_glazkov_comments`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ip31_glazkov_users`
--
ALTER TABLE `ip31_glazkov_users`
  MODIFY `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
