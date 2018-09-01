<?php
class agendasController extends controller {

	
	public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."Login");
		}
	
	}


	public function index() {
		$dados = array(

           'agendas' => array()
		);


   $agendas = new Agendas();

   //inicio paginacao
          $limit = 10;

        $total = $agendas->getTotal();
        $dados['paginas'] = ceil($total/$limit);

        $dados['paginaAtual'] = 1;
        if(!empty($_GET['p'])) {
        	$dados['paginaAtual'] = intval($_GET['p']);
        }

        $offset = ($dados['paginaAtual'] * $limit) - $limit;

		//fim da paginacao
		$dados['agendas'] = $agendas->getAgendas($offset, $limit);
        
		
		$this->loadTemplate('agendas', $dados);

	}

		public function excluir($id){
		$agendas = new Agendas();
		$agendas->deletaAgenda($id);

        header("Location: " .BASE. "agendas");

	}


			public function adicionar(){

		$dados = array();

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
			$titulo = addslashes($_POST['titulo']);
			$descricao = addslashes($_POST['descricao']);
			$data = addslashes($_POST['data']);

			$agendas = new Agendas();

			$agendas->addCompromisso($titulo, $descricao, $data);

			header("Location: " . BASE . 'agendas');

		}

		$this->loadTemplate("agendas_add", $dados);
	}


    public function editar($id){

    	$dados = array(
           'agenda' => array()
    	);


    	$agendas = new Agendas();

    	if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    	
            $titulo = addslashes($_POST['titulo']);
            $descricao = addslashes($_POST['descricao']);
            $data = addslashes($_POST['data']);
    	

    		$agendas->updateCompromisso($id, $titulo, $descricao, $data);

    		header("Location: " .BASE."agendas");
    	}

    	$dados['agenda'] = $agendas->getAgenda($id);

    	$this->loadTemplate('agendas_edit', $dados);
    }



}