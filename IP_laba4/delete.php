<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<?php
	 mysqli_connect("localhost", "root", "", "users") or die ("Невозможно
	подключиться к серверу"); 
	$mysqli = mysqli_connect("localhost", "root", "", "users") or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
	 $mysqli->query($zapros);
	 header("Location: index.php");
	 exit;
	?>

</body>
</html>