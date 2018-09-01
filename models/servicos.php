<?php

class Servicos extends model{

  private $info;


public function isLogged(){


	if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
		return true;
	}else{
		return false;
	}
}




	public function getServicos($offset, $limit, $s=''){
	
		$sql = "SELECT * FROM servico LIMIT $offset, $limit";
		$sql = $this->db->query($sql);
		

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}else{
			return 0;
		}

		return $array;
	}


	public function deletaServico($id){
		$sql = "DELETE FROM servico where id = '$id'";
		$this->db->query($sql);
	}

	
	public function getServico($id){
		$array  = array();

		$sql = "SELECT * FROM servico WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql-> rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}


		public function addServico($nome, $descricao, $valor_inicial, $valor_final){


    $this->db->query("INSERT INTO servico SET nome = '$nome', descricao = '$descricao', valor_inicial = '$valor_inicial', valor_final = '$valor_final'");
	}



	public function updateServico($id, $nome, $descricao, $valor_inicial, $valor_final){

		$this->db->query("UPDATE servico SET nome = '$nome', descricao = '$descricao', valor_inicial = '$valor_inicial', valor_final = '$valor_final' WHERE id = '$id'");
	}


		//saber o total de items na paginacao
		public function getTotal(){
			$sql = "SELECT COUNT(*) as c FROM servico";
			$sql = $this->db->query($sql);
			$sql = $sql->fetch();
	
			return $sql['c'];
		}


		public function getRelatorioServicos(){
			$array = array();
			//quantidade maior que quantidade minima
		   $sql = "SELECT * FROM servico";
		   $sql = $this->db->query($sql);
   
		   if($sql->rowCount() > 0) {
			   $array = $sql->fetchAll();
		   }
   
		   return $array;
		}

}
