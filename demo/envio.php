<?php
    ini_set("SMTP","jrvelazquez1968@gmail.com");
    ini_set("https://formsubmit.co/jrvelazquez1968@gmail.com");
    ini_set('sendmail_from', 'formsubmit.co')
    $


// Variables para los datos del archivo
$nameFile = $_FILES['archivo']['name'];
$sizeFile = $_FILES['archivo']['size'];
$typeFile = $_FILES['archivo']['type'];
$tempFile = $_FILES["archivo"]["tmp_name"];

$cuerpo .= "Presupuesto\r\n";
$cuerpo .= "Content-Type: application/octet-stream; ";
$cuerpo .= "name=" . $nameFile . "r\n";
$cuerpo .= "Content-Transfer-Encoding: base64\r\n";
$cuerpo .= "Content-Disposition: attachment; ";
$cuerpo .= "filename=" . $nameFile . "\r\n";
$cuerpo .= "\r\n";

$fp = fopen($tempFile, "rb");
$file = fread($fp, $sizeFile);
$sizeFile = chunk_split(base64_encode($file));

?>
