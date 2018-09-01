<?php

class loginController extends controller{


	public function __construct(){

		parent::__construct();
	}

	public function index(){

		$array = array();

		if(isset($_POST['login']) && !empty($_POST['login'])){
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$usuarios = new Usuarios();

			if($usuarios->fazerLogin($login, $senha)){
				header("Location: ".BASE);
			}
		}

		//carrega a pagina de login
		$this->loadView("login", $array);
	}
   //sair
	public function logout(){
         unset($_SESSION['lgadmin']);
         header("Location: ".BASE);
	}
}