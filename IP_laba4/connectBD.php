<?php 
	define ("HOST", "localhost");
	define ("USER", "a0613550_DB");
	define ("PASS", "admin");
	define ("DB", "a0613550_DB"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
 ?>