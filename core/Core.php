<?php
class Core {

	public function run() {
		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);

		$params = array();
		if(!empty($url)) {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}
         //para a pagina não encontrada
		//nao encontrou o controller vai para a pagina nao encontrada
		//se o controller nao existir e nem a action ele da pagina não encontrada
		if(!file_exists('Controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){

			$currentController = 'notfoundController';
			$currentAction = 'index';

		}

		//fim da pagina nao encontrada

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}

}