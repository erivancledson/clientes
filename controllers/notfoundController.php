<?php
class notfoundController extends controller {


	
	public function index() {
	
        
		//passa um array vazio pq nao precisa passar dados
		//bom para paginas estaticas
		$this->loadTemplate('404', array());

	}

}










