<!DOCTYPE html>
<html lang='zxx'>
	<head>
		<meta charset='utf-8'>
		<title>Сторінка Адміністратора Дніпропетровської області</title>
		<link rel='stylesheet' type='text/css' href='style1.css'>
		<link rel='stylesheet' type='text/css' href='style2.css'>
		<link rel='shortcut icon' href='4.ico'>
	</head>
	<body>
		<div class='kartinka'>
		</div>
		<div class='all'>
			<div class='cel_gol'>
				<p class='textus'>Сторінка адміністратора</p>
			</div>
			<div class='coment'>
<?php
include "1.php";
mysqli_select_db($dbcn, "Города_области");
$q="SELECT * FROM коментарій";
$y=mysqli_query($dbcn,$q);
echo "<a name = op_com><h2>Опубліковані коментарі</h2></a>";
while($p=mysqli_fetch_assoc($y))
{
	echo"<div class='coment_otdel'>
	<div class='coment_otdel_text'><p class='text_comd'><span class='text_comen'>".$p['імя']."</span>
	   • ".$p['дата']."</p>
	<p class='text_com'>".$p['текст']."</p></div>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p['дата']."'>
			<input type='hidden' name='5' value='коментарій'>
			<input type='hidden' name='6' value='дата'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div>";
}
$q1="SELECT * FROM коментарій_пер";
$y1=mysqli_query($dbcn,$q1);
echo "<br><a name = neop_com><h2>Не опубліковані коментарі</h2></a>";
while($p1=mysqli_fetch_assoc($y1))
{
	echo"<div class='coment_otdel'>
	<div class='coment_otdel_text'><p class='text_comd'><span class='text_comen'>".$p1['імя']."</span>
	   • ".$p1['дата']."</p>
	<p class='text_com'>".$p1['текст']."</p></div>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p1['дата']."'>
			<input type='hidden' name='5' value='коментарій_пер'>
			<input type='hidden' name='6' value='дата'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br>
		<div class='coment_otdel_text'>
	<form action='perenes.php' method='post'>
            <input type='hidden' name='1' value='".$p1['дата']."'>
			<input type='hidden' name='2' value='".$p1['імя']."'>
			<input type='hidden' name='3' value='".$p1['текст']."'>
            <input class='rel_b' type='submit' value='Опублікувати'>
        </form>
	</div>";
}
echo "<br><a name = stati><h2>Статті</h2></a>";
$q2="SELECT * FROM історія";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Історія</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina_h.php' method='post'>
			<input type='text' name='1' value='".$p2['номер']."'>
            <input type='text' name='2' value='".$p2['імя']."'>
			<textarea type='text' name='3' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='4' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='історія'>
			<input type='hidden' name='6' value='номер'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['номер']."'>
			<input type='hidden' name='5' value='історія'>
			<input type='hidden' name='6' value='номер'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty_h.php' method='post'>
			<p class='text_com_red'>Сюди пишете номер статті, якщо часовий проміжок цієї статті між двома іншими статтями, подивіться їх номери, тоді в цій статті напишіть номер між цими двома. Наприклад стаття між номерами 5 і 6 тоді сюди запишемо номер 6.5. Пишіть числа з плаваючою через ТОЧКУ! ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='історія'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM географія";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Географія</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='географія'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='географія'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
            <p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='географія'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM дніпро";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Дніпро</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='дніпро'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='дніпро'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
			<p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='дніпро'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM кривийріг";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Кривий Ріг</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='кривийріг'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='кривийріг'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
            <p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='кривийріг'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM камянске";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Камянське</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='камянске'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='камянске'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
            <p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='камянске'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM новомосковськ";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Новомосковськ</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='новомосковськ'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='новомосковськ'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
            <p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='новомосковськ'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM нікополь";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Нікополь</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='нікополь'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='нікополь'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
            <p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='нікополь'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM дніпропетровщина";
$y2=mysqli_query($dbcn,$q2);
echo "<h2>Факти про Дніпропетровщина</h2>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel_text'>
	<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='zmina.php' method='post'>
			<input type='text' name='4' value='".$p2['id']."'>
            <input type='text' name='1' value='".$p2['імя']."'>
			<textarea type='text' name='2' cols='70' rows='15'>".$p2['текст']."</textarea>
			<input type='text' name='3' value='".$p2['зоб']."'>
			<input type='hidden' name='5' value='дніпропетровщина'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Змінити'>
        </form>
	</div>
	<div class='coment_otdel_text'>
	<form action='delete.php' method='post'>
            <input type='hidden' name='1' value='".$p2['id']."'>
			<input type='hidden' name='5' value='дніпропетровщина'>
			<input type='hidden' name='6' value='id'>
            <input class='rel_b' type='submit' value='Видалити'>
        </form>
	</div><br><br>";
}
echo"<div class='coment_otdel_text'>
<p class='text_com_red'>Замість ' пишіть ` й замість \" пишіть «»</p>
	<form action='dodaty.php' method='post'>
			<p class='text_com_red'>Сюди пишете номер статті, якщо у статті зверху номер 6 то пишете на одиницю більший тобто 7. ЦЕ ОБОВ`ЯЗКОВО!</p>
            <input type='text' name='4'>
			<p class='text_com'>Сюди пишете заголовок статті</p>
			<input type='text' name='1'>
			<p class='text_com'>Сюди пишете статтю</p>
			<textarea type='text' name='2' cols='70' rows='15'></textarea>
			<p class='text_com'>Сюди пишете назву й розширення картинки</p>
			<input type='text' name='3'>
			<input type='hidden' name='5' value='дніпропетровщина'>
			<input type='hidden' name='6' value='імя'>
            <input class='rel_b' type='submit' value='Додати'>
        </form>
	</div>";
$q2="SELECT * FROM інформація_пер";
$y2=mysqli_query($dbcn,$q2);
echo "<a name = stati_l><h2>Пропозиції від відвідувачів сайту щодо зміни статтей</h2></a>";
while($p2=mysqli_fetch_assoc($y2))
{
	echo"<div class='coment_otdel'>
	<div class='coment_otdel_text'><p class='text_comd'><span class='text_comen'>".$p2['імя']."</span>
	   • ".$p2['адрес']."</p>
	<p class='text_com'>".$p2['назва']."</p>
	<p class='text_com'>".$p2['текст']."</p></div>
	</div>";
}
?>
			<br></div>
			<div class="endd">
				<p class="end1">Сайт створив Бита Андрій Андрійович для курсової роботи у 2022 році!</p>
				<img src='логотип.png' width='100px' height='100px'>
			</div>
		</div>
	    <div class='menu'>
			<p class='buton'>
			<ul class='css-menu-1'>
			<li><a href=./Golovna.php>Головна</a></li>
			<li><a href=./naseleni1.php>Міста і селища міського типу</a></li>
			<li><a href=./facts.php>Цікаві місця</a></li></ul></p>
			<div class='menu_2'>
				<ul class='css-menu-2'>
				<li><a href=#op_com>Опубліковані коментарі</a></li>
				<li><a href=#neop_com>Не опубліковані коментарі</a></li>
				<li><a href=#stati>Cтатті</a></li>
				<li><a href=#stati_l>Cтатті від людей</a></li></ul>
			</div>
		</div>
	</body>
</html>
