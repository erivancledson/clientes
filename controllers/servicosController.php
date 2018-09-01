<?php
class servicosController extends controller {

	
	public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."Login");
		}
	
	}


	public function index() {
		$dados = array(

           'servicos' => array()
		);

		
		$servicos = new Servicos();
      

 //inicio da paginação

 $limit = 10;

 $total = $servicos->getTotal();
 $dados['paginas'] = ceil($total/$limit);

 $dados['paginaAtual'] = 1;
 if(!empty($_GET['p'])) {
	 $dados['paginaAtual'] = intval($_GET['p']);
 }

 $offset = ($dados['paginaAtual'] * $limit) - $limit;

 //fim da paginacao


		$dados['servicos'] = $servicos->getServicos($offset, $limit);
        
		
		$this->loadTemplate('servicos', $dados);

	}


		public function adicionar(){

		$dados = array();

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$descricao = addslashes($_POST['descricao']);
            $valor_inicial = addslashes($_POST['valor_inicial']);
			$valor_final = addslashes($_POST['valor_final']);
			
			$valor_inicial = str_replace(',','.', $valor_inicial);
            $valor_final = str_replace(',','.', $valor_final);

			$servicos = new Servicos();

			$servicos->addServico($nome, $descricao, $valor_inicial, $valor_final);

			header("Location: " . BASE . 'servicos');

		}

		$this->loadTemplate("servicos_add", $dados);
	}


		public function excluir($id){
		$servicos = new Servicos();
		$servicos->deletaServico($id);

        header("Location: " .BASE. "servicos");

	}



	 public function editar($id){

    	$dados = array(
           'servico' => array()
    	);


    	$servicos = new Servicos();

    		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$descricao = addslashes($_POST['descricao']);
            $valor_inicial = addslashes($_POST['valor_inicial']);
            $valor_final = addslashes($_POST['valor_final']);

            $valor_inicial = str_replace(',','.', $valor_inicial);
            $valor_final = str_replace(',','.', $valor_final);

    		$servicos->updateServico($id, $nome, $descricao, $valor_inicial, $valor_final);

    		header("Location: " .BASE."servicos");
    	}

    	$dados['servico'] = $servicos->getServico($id);

    	$this->loadTemplate('servicos_edit', $dados);
	}
	

	public function gerarRelatorio() {
		$data = array();
		$s = new Servicos();

		$data['list'] = $s->getRelatorioServicos();

		$this->loadTemplate('relatorio', $data);
	}



}