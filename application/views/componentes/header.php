<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SISGEMED | <?= $titulo;?></title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="<?=$url_base;?>css/iniciarSesion.css" rel="stylesheet" type="text/css" />        
		<link href="<?=$url_base;?>plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="<?=$url_base;?>plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?=$url_base;?>plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?=$url_base;?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="<?=$url_base;?>plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="<?=$url_base;?>plugins/select2/select2.css" rel="stylesheet">
		<link href="<?=$url_base;?>css/style.css" rel="stylesheet">
	</head>
<body>        
<!-- Porcion de codigo que evitara que PHP notifique todos los NOTICE en el codigo -->
<?php
// Notificar todos los errores excepto E_NOTICE 
// Este es el valor predeterminado establecido en php.ini 
error_reporting(E_ALL ^ E_NOTICE);
?>