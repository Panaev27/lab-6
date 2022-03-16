<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Панаев Семён Пи-323</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<?php
	//f0592623_proc admin f0592623_proc
	include ("connectBD.php");
	?>
	<h2>Зарегистрированные пользователи:</h2>
	<table border="1" >
	
	 <tr id="table1"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_proc, proc_name, type, razryad, devolper", from: "proces", zagl: "<tr> // вывод «шапки» таблицы <th> id </th><th> Название </th> <th> тип </th><th> разрядность </th><th> разработчик </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>",file:"P"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table1").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php 
	print "</table>";
	 ?>
	<p> <a href="newP.php"> Добавить пользователя </a>
		<br>
	<h2>Магазины</h2>
	<table border="1">
	<tr id="table2"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_store, name, url", from: "digital_stores", zagl: "<tr> // Цифровые магазины <th> id </th> <th> Название </th> <th> ссылка </th> </tr>",file:"Store"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table2").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newStore.php"> Добавить магазин </a>
		<br>
	<h2>Ключи</h2>

	<table border="1">
	
	 <tr id="table3"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_key, data_purchase, data_end, id_OC, id_store, cost, kluch", from: "digital_keys", zagl: "<tr> // Цифровые ключи <th> id </th><th> Дата приобретения </th> <th> дата окончания </th> <th> ID ОС </th> <th> ID цифрового магазина </th> <th> стоимость </th> <th> ключ </th> </tr>",file:"Key"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table3").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newKey.php"> Добавить ключ </a>
		<br>
	<a href="gen_pdf.php">Сгенерировать пдф файл</a> <br>
	<a href="gen_xls.php">Сгенерировать xls файл</a>
</body>
</html>