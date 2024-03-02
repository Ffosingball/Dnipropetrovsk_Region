<html>
	<head>
		<meta charset='utf-8'>
		<title>Міста і селища міського типу</title>
		<link rel='stylesheet' type='text/css' href='style1.css'>
		<link rel='stylesheet' type='text/css' href='style2.css'>
		<link rel='stylesheet' type='text/css' href='sttable1.css'>
		<link rel='shortcut icon' href='4.ico'>
		<script>document.addEventListener('DOMContentLoaded', () => {

    const getSort = ({ target }) => {
        const order = (target.dataset.order = -(target.dataset.order || -1));
        const index = [...target.parentNode.cells].indexOf(target);
        const collator = new Intl.Collator(['en', 'ru'], { numeric: true });
        const comparator = (index, order) => (a, b) => order * collator.compare(
            a.children[index].innerHTML,
            b.children[index].innerHTML
        );
        
        for(const tBody of target.closest('table').tBodies)
            tBody.append(...[...tBody.rows].sort(comparator(index, order)));

        for(const cell of target.parentNode.cells)
            cell.classList.toggle('sorted', cell === target);
    };
    
    document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));
    
});</script>
	</head>
	<body>
		<div class='kartinka'>
		</div>
		<div class='all'>
			<div class='cel_gol'>
				<p class='textus'>Міста і селища міського типу</p>
			</div>
			<div class='cel_table'>
			<h1>Міста</h1>
<?php
include "1.php";
mysqli_select_db($dbcn, "города_области");
$q="SELECT * FROM міста";
$y=mysqli_query($dbcn,$q);
echo "<table class='table_sort'><thead>
		<tr>
		<th>Назва населеного пункту</th>
		<th>Площа</th>
		<th>Дата заснування</th>
		<th>Населення(перепис за 2020р.)</th>
		<th>Поштовий індекс</th>
		<th>День міста</th>
		<th>Висота над рівнем моря</th>
		</tr></thead><tbody>";
while($p=mysqli_fetch_assoc($y))
{
	echo"<tr>
	<td align='center'><p class='text'>".$p['назва']."</p></td>
	<td align='center'><p class='text'>".$p['площа']." кв.км</p></td>
	<td align='center'><p class='text'>".$p['рік_заснування']."</p></td>
	<td align='center'><p class='text'>".$p['населення']."</p></td>
	<td align='center'><p class='text'>".$p['індекс']."</p></td>
	<td align='center'><p class='text'>".$p['день_міста']."</p></td>
	<td align='center'><p class='text'>".$p['висота']." м</p></td>
	</tr>";
}
echo"</tbody></table><h1>Селища міського типу</h1>";
$q="SELECT * FROM міського_типу";
$y=mysqli_query($dbcn,$q);
echo "<table class='table_sort'><thead>
		<tr>
		<th>Назва населеного пункту</th>
		<th>Площа</th>
		<th>Дата заснування</th>
		<th>Населення(перепис за 2020р.)</th>
		<th>Поштовий індекс</th>
		<th>День міста</th>
		<th>Висота над рівнем моря</th>
		</tr></thead><tbody>";
while($p=mysqli_fetch_assoc($y))
{
	echo"<tr>
	<td align='center'><p class='text'>".$p['назва']."</p></td>
	<td align='center'><p class='text'>".$p['площа']." кв.км</p></td>
	<td align='center'><p class='text'>".$p['рік_заснування']."</p></td>
	<td align='center'><p class='text'>".$p['населення']."</p></td>
	<td align='center'><p class='text'>".$p['індекс']."</p></td>
	<td align='center'><p class='text'>".$p['день_міста']."</p></td>
	<td align='center'><p class='text'>".$p['висота']." м</p></td>
	</tr>";
}
?>
		</tbody></table>
			</div>
		<p class='text'><center>Якщо у вас є якісь думки про цей сайт, або ідеї, враження, то напишіть про це будь-ласка!</center></p><h2></h2>
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
echo "<div class='coment'>";
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
		<div class='menu_n'>
			<p class='buton'>
			<ul class='css-menu-1'>
			<li><a href=./Golovna.php>Головна</a></li>
			<li><a href=./naseleni1.php>Міста і селища міського типу</a></li>
			<li><a href=./facts.php>Цікаві місця</a></li></ul></p>
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

