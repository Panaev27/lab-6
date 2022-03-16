<?php 
	require_once('tcpdf_min/tcpdf.php');
	ob_clean();

	include ("connectBD.php");

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Имя автора');
$pdf->SetTitle('Название документа');
// Устанавливаем данные заголовка по умолчанию
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//указываем путь к файлу
$font = 'Roboto-Medium.ttf';
// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont($font, 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 14, '', true);
// Добавляем страницу
$pdf->AddPage();


$procs=$mysqli->query("SELECT data_purchase, data_end, id_OC, id_store, kluch FROM digital_keys"); 
$rows = "";

$count= 0;
while ($row=mysqli_fetch_array($procs)) {
	$keys = $mysqli->query("SELECT id_proc, proc_name, type, razryad, devolper, user_count FROM proces WHERE id_proc =" . $row['id_OC']);
	$key = mysqli_fetch_array($keys);
	$stores = $mysqli->query("SELECT url FROM digital_stores WHERE id_store =". $row['id_store']);
	$store = mysqli_fetch_array($stores);

	$count++;
	$rows = $rows. "<tr>";
	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $key['proc_name'] ."</td>";
	$rows = $rows. "<td>". $key['type'] ."</td>";
	$rows = $rows. "<td>". $key['razryad'] ."</td>";
	$rows = $rows. "<td>". $key['devolper'] ."</td>";
	$rows = $rows. "<td>". $key['user_count'] ."</td>";
	$rows = $rows. "<td>". $row['kluch'] ."</td>";
	$rows = $rows. "<td>". date('d-m-Y', strtotime($row['data_purchase'])) ."</td>";
	$rows = $rows. "<td>". date('d-m-Y', strtotime($row['data_end'])) ."</td>";
	$rows = $rows. "<td>". $store['url'] ."</td>";
	$rows = $rows. "</tr>";
};

// Устанавливаем текст
$html = "
<h2> Операционные системы </h2>
	<table>
		<tr>
			<td>№ п/п</td> <td>Название</td> <td>тип оборудования</td> <td>Разрядность</td> <td>Разработчик</td> <td>Количество пользователей</td> <td>цифровой ключ</td> <td>дата приобретения</td> <td>дата окончания</td> <td>url магазина</td>
		</tr>
	
". $rows ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('document.pdf', 'I');
?>
