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
	 $zapros="UPDATE user SET user_name='".$_GET['name'].
	"', user_login='".$_GET['login']."', user_password='"
	.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
	"', user_info='".$_GET['info']."' WHERE id_user="
	.$_GET['id_user'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	пользователей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php">
	Вернуться к списку пользователей</a> '; }
	?>

</body>
</html>