<?php

class Agendas extends model{

  private $info;


public function isLogged(){


	if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
		return true;
	}else{
		return false;
	}
}




	public function getAgendas($offset, $limit){
        //LIMIT $offset, $limit" paginação
		$sql = "SELECT * FROM agenda LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}else{
			return 0;
		}

		return $array;
	}


	public function deletaAgenda($id){
		$sql = "DELETE FROM agenda where id = '$id'";
		$this->db->query($sql);
	}

	
	public function addCompromisso($titulo, $descricao, $data){


    $this->db->query("INSERT INTO agenda SET titulo = '$titulo', descricao = '$descricao', data = '$data'");
	}



		public function getAgenda($id){
		$array  = array();

		$sql = "SELECT * FROM agenda WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql-> rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}




public function updateCompromisso($id, $titulo, $descricao, $data){

		$this->db->query("UPDATE agenda SET titulo = '$titulo', descricao = '$descricao', data = '$data' WHERE id = '$id'");
	}


	//saber o total de items na paginacao
	public function getTotal(){
		$sql = "SELECT COUNT(*) as c FROM agenda";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['c'];
	}



}
