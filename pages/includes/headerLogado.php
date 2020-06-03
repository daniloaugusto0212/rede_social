<!DOCTYPE html>
<html>
<head>
	<title>Rede Social</title>
	<meta charset="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<header style="padding:0;">
	<div class="container">
		<div style="margin-top:8px;" class="logo"><a href="<?php echo INCLUDE_PATH ?>">Rede Social</a></div>
		<div class="btn-opt-menu">
			<a style="background: transparent;" href="<?php echo INCLUDE_PATH ?>solicitacoes">Solictações(0)</a>
			<a style="background: transparent;" href="<?php echo INCLUDE_PATH ?>comunidade">Comunidade</a>
            <a href="<?php echo INCLUDE_PATH ?>me?sair"><i class="fa fa-times"></i> Sair</a>
        </div>
	</div>
	<div class="clear"></div>
</header>