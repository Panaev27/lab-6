<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панаев Семён ПИ-323</title>
</head>
<body>
	<H2>Регистрация на сайте:</H2>
	<form action="save_new.php" metod="get">
	 Имя: <input name="name" size="50" type="text">
	<br>Логин: <input name="login" size="20" type="text">
	<br>Пароль: <input name="password" size="20" type="password">
	<br>Е-mail: <input name="e_mail" size="30" type="text">
	<br>Информация: <textarea name="info" rows="4" cols="40">
	</textarea>
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку пользователей </a>
</body>
</html>