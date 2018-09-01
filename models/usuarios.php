<?php

class Usuarios extends model{


    private $info;

    public function isLogged(){


        if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
            return true;
        }else{
            return false;
        }
    }


    
public function fazerLogin($login, $senha){

	$sql = "SELECT * FROM usuario where login = '$login' and senha = '$senha'";

	$sql = $this->db->query($sql);

	if($sql->rowCount() > 0){
		$row = $sql->fetch();

		$_SESSION['lgadmin'] = $row['id'];

		return true;
	}
	return false;
}


public function getUsuarios($offset, $limit){

    $sql = "SELECT * FROM usuario LIMIT $offset, $limit";
    $sql = $this->db->query($sql);

    if($sql->rowCount() > 0){
        $array = $sql->fetchAll();
    }else{
        return 0;
    }

    return $array;
}

public function addUsuario($login, $senha){


    $this->db->query("INSERT INTO usuario SET login = '$login', senha = '$senha'");
	}

	public function deletaUsuario($id){
		$sql = "DELETE FROM usuario where id = '$id'";
		$this->db->query($sql);
    }
    

    public function getUsuario($id){
		$array  = array();

		$sql = "SELECT * FROM usuario WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql-> rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function updateUsuario($id, $login, $senha){

		$this->db->query("UPDATE usuario SET login = '$login', senha = '$senha' WHERE id = '$id'");
	}


		//saber o total de items na paginacao
		public function getTotal(){
			$sql = "SELECT COUNT(*) as c FROM usuario";
			$sql = $this->db->query($sql);
			$sql = $sql->fetch();
	
			return $sql['c'];
		}
}