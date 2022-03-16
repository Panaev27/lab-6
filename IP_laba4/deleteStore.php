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
	 $zapros="DELETE FROM digital_stores WHERE id_store=" . $_GET['id_store'];
	 $mysqli->query($zapros);
	 header("Location: Proc.php");
	 exit;
	?>

</body>
</html>