<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<?php
	 include ("checkSession.php");
	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="UPDATE digital_keys SET data_purchase='".$_GET['data_purchase'].
	"', data_end='".$_GET['data_end']."', id_OC='"
	.$_GET['id_OC']."', id_store='".$_GET['id_store'].
	"', cost='".$_GET['cost']."', kluch='".$_GET['kluch']."' WHERE id_key="
	.$_GET['id_key'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="Proc.php"> Вернуться к списку
	пользователей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="Proc.php">
	Вернуться к списку пользователей</a> '; }
	?>

</body>
</html>