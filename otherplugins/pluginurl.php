<?php
$excelupload = "/var/www/html/thrashold/uploads/";
$applicationurl = "http://www.icuracao.com/thrashold";
// Database Connection
	$link = mysql_connect('192.168.100.121','curacaodata','curacaodata');
	mysql_select_db('icuracaoproduct',$link) or die('not connecting');
?>