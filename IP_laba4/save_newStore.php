<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён ПИ-323</title>
</head>
<body>
	<?php
	 // Подключение к базе данных:
	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO digital_stores SET name='" . $_GET['name']
	."', url='" . $_GET['url'] . "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы зарегистрировали магазин в базе данных.";
	 print "<p><a href=\"Proc.php\"> Вернуться к списку
	магазинов </a>"; }
	 else { print "Ошибка сохранения. <a href=\"Proc.php\">
	Вернуться к списку магазинов </a>"; }
	?>
</body>
</html>