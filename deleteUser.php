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
	include ("connectbd.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM users WHERE id_user=" . $_GET['id_user'];
	 $mysqli->query($zapros);
	 header("Location: Proc.php");
	 exit;
	?>

</body>
</html>