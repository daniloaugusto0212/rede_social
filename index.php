<?php 
include('config.php'); 
Site::updateUsuarioOnline(); 
Site::contador(); 

$homeController = new controller\homeController();
$perfilController = new controller\perfilController();

Router::get('/',function() use ($homeController){
	$homeController->index();
});

Router::get('/me',function() use ($perfilController){
	$perfilController->index();
});


?>
