<!DOCTYPE html>
<html lang='zxx'>
	<head>
		<meta charset='utf-8'>
		<title>Головна сторінка дніпропетровської області</title>
		<link rel='stylesheet' type='text/css' href='style1.css'>
		<link rel='stylesheet' type='text/css' href='style2.css'>
		<link rel='shortcut icon' href='4.ico'>
	</head>
	<body>
		<div class='kartinka'>
		</div>
		<div class='all'>
			<div class='cel_gol'>
				<p class='textus'>Дніпропетровська область</p>
			</div>
			<div class='cel_text'>
				<a name = istoria>
				<h1>Історія</h1></a>
				</br>
				<img src='2.png' width='100%' height='20%'>
				<p class='textt'>Нічого особливого, звичайне поле</p>
				</br></br>
<?php
include "1.php";
mysqli_select_db($dbcn, "Города_области");
$q="SELECT * FROM історія";
$y=mysqli_query($dbcn,$q);
while($p=mysqli_fetch_assoc($y))
{
	echo"<h2>".$p['імя']."</h2>
		<p class='text'>".$p['текст']."</p>
		<img src='".$p['зоб']."' width='100%' height='20%'>";
}
?>
				</br></br></br></br>
				<a name = geograf>
				<h1>Географія</h1></a>
<?php
include "1.php";
mysqli_select_db($dbcn, "Города_области");
$q="SELECT * FROM географія";
$y=mysqli_query($dbcn,$q);
while($p=mysqli_fetch_assoc($y))
{
	echo"<h2>".$p['імя']."</h2>
		<p class='text'>".$p['текст']."</p>
		<img src='".$p['зоб']."' width='100%' height='20%'>";
}
?>
				</br></br></br></br>
				<a name = admin>
				<h1>Адміністративно-територіальний устрій</h1></a>
				<img src='100.jpg' width='100%' height='20%'>
				<h2></h2><p class='text'>Якщо у вас є якісь думки про цей сайт, або ідеї, враження, то напишіть про це будь-ласка!</p><h2></h2>
			</div>
			<div id="vod_coment">
					<form action=comment.php method=POST>
						<div class='coment_otdel_text'><p class='text_com_red'>УВАГА! Замість ' пишіть ` й замість \" пишіть «», інакше ваш коментар не відправится!</p></div>
						<div class='coment_otdel_text'><p class='text_com'>Введіть Ім'я</p></div>
						<div class='coment_otdel_text'><input type='text' name='1' style='width:150px;'></div>
						<div class='coment_otdel_text'><p class='text_com'>Введіть текст</p></div>
						<div class='coment_otdel_text'><textarea type='text' name='2' cols='30' rows='5'>Максимум 2000 символів</textarea></div>
						<br>
						<div class='coment_otdel_text'><input class='rel_b' type='submit' value='Надіслати'></div>
					</form>
					<a href="#" class="close">×</a>
				</div>
			<center><a class='rel' href="#vod_coment">Написати коментар</a></center><br>
<?php
include "1.php";
mysqli_select_db($dbcn, "Города_области");
$q="SELECT * FROM коментарій";
$y=mysqli_query($dbcn,$q);
echo "<div class='coment'><h2>Коментарі</h2>";
while($p=mysqli_fetch_assoc($y))
{
	echo"<div class='coment_otdel'>
	<div class='coment_otdel_text'><p class='text_comd'><span class='text_comen'>".$p['імя']."</span>
	   • ".$p['дата']."</p>
	<p class='text_com'>".$p['текст']."</p></div>
	</div>";
}
?>
		</div>
			<div class='menu'>
				<p class='buton'>
				<ul class='css-menu-1'>
				<li><a href=./Golovna.php>Головна</a></li>
				<li><a href=./naseleni1.php>Міста і селища міського типу</a></li>
				<li><a href=./facts.php>Цікаві місця</a></li></ul></p>
				<div class='menu_2'>
				<ul class='css-menu-2'>
					<li><a href=#istoria>Історія</a></li>
					<li><a href=#geograf>Географія</a></li>
					<li><a href=#admin>Адміністративний поділ</a></li></ul>
				</div>
			</div>
			<div class="endd">
				<div id="vod_zmina">
					<form action=stata.php method=POST>
						<div class='coment_otdel_text'><p class='text_com_red'>УВАГА! Замість ' пишіть ` й замість \" пишіть «», інакше ваші пропозиції не відправится!</p></div>
						<div class='coment_otdel_text'><p class='text_com'>Введіть Ім'я</p></div>
						<div class='coment_otdel_text'><input type='text' name='1' style='width:150px;'></div>
						<div class='coment_otdel_text'><p class='text_com'>Введіть назву статті яку змінюєте</p></div>
						<div class='coment_otdel_text'><input type='text' name='2' style='width:150px;'></div>
						<div class='coment_otdel_text'><p class='text_com'>Введіть вашу електронну адресу</p></div>
						<div class='coment_otdel_text'><input type='text' name='3' style='width:150px;'></div>
						<div class='coment_otdel_text'><p class='text_com'>Розпишіть детально де і що ви хочете змінити</p></div>
						<div class='coment_otdel_text'><textarea type='text' name='4' cols='30' rows='5'>Максимум 4000 символів</textarea></div>
						<br>
						<div class='coment_otdel_text'><input class='rel_b' type='submit' value='Надіслати'></div>
					</form>
					<a href="#" class="close">×</a>
				</div>
				<p class="end1">Якщо вам є щось змінити, то будь-ласка надішліть ці зміни!</p>
				<center><a class='rel' href="#vod_zmina">Змінити статтю</a></center>
				<p class="end1">Сайт створив Бита Андрій Андрійович для курсової роботи у 2022 році!</p>
				<img src='логотип.png' width='100px' height='100px'><br>
				<a class="rela" href=./perer.php>Перейти на сайт адміністратора тут</a>
			</div>
		</div>
	</body>
</html>
