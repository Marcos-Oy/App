<?php
	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($control, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('app/controllers/' . $control . 'Controller.php');
		//crea el controlador
		switch($control){
			case 'Login':$control= new LoginController();break;
			case 'Dashboard':$control= new DashboardController();break;
			case 'Users':$control= new UsersController();break;

		}
		//llama a la acción del controlador
		$control->{$action }();
	}

	//array con los controladores y sus respectivas acciones
	$controllers= array(
						'Login'=>['login','forgot_password','register'],
						'Dashboard'=>['dash'],
						'Users'=>['show','create','edit'],
						);
						
	//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
	if (array_key_exists($control, $controllers)) {
		//verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
		if (in_array($action, $controllers[$control])) {
			//llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
			call($control, $action);
		}
		else{
			call('Prueba', 'error');
		}
	}else{// le pasa el nombre del controlador y la pagina de error
		call('Prueba', 'error');
	}
?>