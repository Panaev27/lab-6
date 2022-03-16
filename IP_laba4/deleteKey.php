<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
</head>
<body>
	<?php
	 include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM digital_keys WHERE id_key=" . $_GET['id_key'];
	 $mysqli->query($zapros);
	 header("Location: Proc.php");
	 exit;
	?>

</body>
</html>