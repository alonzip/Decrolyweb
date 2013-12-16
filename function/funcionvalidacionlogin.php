<?php
function xhtml_header($titulo) //funcion para dar titulo a la pagina
{
echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\" />
<title>$titulo</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\" media=\"screen\" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id=\"main-wrap\">
	<div id=\"wrapper\">";
echo "\n";
}
?>
