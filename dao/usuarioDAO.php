<?php 
require_once 'db/Conexao.php';
require_once "view/template.php";

// $p = new Conexao("bibliotecaLPAW", "localhost", "root", "");
/**
 * 
 */
class usuarioDAO {
	

	function logar($login, $senha){
		$cmd = Conexao::getInstance()->prepare("SELECT * from tb_usuaio where nomeUsuario = :l AND senha = :s");
		
		$cmd->bindValue(":l", $login);
		$cmd->bindValue(":s", $senha);
		
		$cmd->execute();
		$rs = $cmd->fetch(PDO::FETCH_OBJ);
    	if($rs == NULL){
    		return false;	
    	}else{
    		return true;
    	}                  
			
	}
	
}
 ?>