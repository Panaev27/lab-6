<?php
session_start();
include("connectBD.php");
echo "Новая строка";
echo $_POST['zagl'];
	$result=$mysqli->query("SELECT ". $_POST['select'] . "
	FROM ". $_POST['from'] . ""); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 $mass = explode(",", $_POST['select']);
	 for ($i=0; $i < count($mass) ; $i++) { 
	 	if (strtotime($row[$i])) {
	 		echo "<td >" . date('d-m-Y',strtotime($row[$i])) . "</td> ";
	 	} else {
	 	echo "<td >" . $row[$i] . "</td> ";
	 }
	 }
	 echo "<td><a href='edit". $_POST['file'].".php?".$mass[0] ."=" . $row[0]
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
	if ($_SESSION['type'] == 2) {
		echo "<td><a href='delete". $_POST['file'].".php?".$mass[0] ."=" . $row[0]
	. "'>Удалить</a></td>";
	} else {
	echo "<td>Нельзя</td>";
	}
	 echo "</tr>";
	}
	
	?>