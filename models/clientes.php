<?php

class Clientes extends model{

	private $info;


public function isLogged(){


	if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
		return true;
	}else{
		return false;
	}
}


public function getClientes($offset, $limit){

	$sql = "SELECT * FROM clientes LIMIT $offset, $limit";
	$sql = $this->db->query($sql);

	if($sql->rowCount() > 0){
		$array = $sql->fetchAll();
	}else{

		return 0;
	}

	return $array;
}


public function deletaClientes($id){

	$sql = "DELETE FROM clientes where id = '$id'";
	$this->db->query($sql);
		
	}


	public function addCliente($nome, $telefone, $email){

		$this->db->query("INSERT INTO clientes SET nome = '$nome', telefone = '$telefone', email = '$email'");
	}


	public function getCliente($id){

		$array = array();

		$sql = "SELECT * FROM clientes WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function updateCliente($id, $nome, $telefone, $email){
		$this->db->query("UPDATE clientes SET nome = '$nome', telefone = '$telefone', email = '$email' where id = '$id'");
	}



		//saber o total de items na paginacao
		public function getTotal(){
			$sql = "SELECT COUNT(*) as c FROM clientes";
			$sql = $this->db->query($sql);
			$sql = $sql->fetch();
	
			return $sql['c'];
		}

}