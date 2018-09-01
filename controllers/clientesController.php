<?php

class clientesController extends controller{


public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."Login");
		}
	
	}


	public function index() {
		$dados = array(

           'clientes' => array()
		);


   $clientes = new Clientes();

   //inicio paginacao
          $limit = 10;

        $total = $clientes->getTotal();
        $dados['paginas'] = ceil($total/$limit);

        $dados['paginaAtual'] = 1;
        if(!empty($_GET['p'])) {
        	$dados['paginaAtual'] = intval($_GET['p']);
        }

        $offset = ($dados['paginaAtual'] * $limit) - $limit;

		//fim da paginacao
		$dados['clientes'] = $clientes->getClientes($offset, $limit);
        
		
		$this->loadTemplate('clientes', $dados);

	}


	public function adicionar(){

		$dados = array();

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);

			$clientes = new Clientes();

			$clientes->addCliente($nome, $telefone, $email);

			header("Location: " .BASE. "clientes");
		}

		$this->loadTemplate("clientes_add", $dados);
	}


	public function excluir($id){

		$clientes = new Clientes();

	    $clientes->deletaClientes($id);

	    header("Location: ".BASE."clientes");
	}



public function editar($id){

    	$dados = array(
           'cliente' => array()
    	);


    	$clientes = new Clientes();

    	if(isset($_POST['nome']) && !empty($_POST['nome'])){
    		$nome = addslashes($_POST['nome']);
    		$telefone = addslashes($_POST['telefone']);
    		$email = addslashes($_POST['email']);

    		$clientes->updateCliente($id, $nome, $telefone, $email);

    		header("Location: " .BASE."clientes");
    	}

    	$dados['cliente'] = $clientes->getCliente($id);

    	$this->loadTemplate('clientes_edit', $dados);
    }






}