<?php 
require_once 'db/Conexao.php';
require_once "modelo/categoria.php";

	class categoriaDao{

		public function salvarCategoria($id, $categoria){
			if(!empty($id)){
				$cmd = Conexao::getInstance()->prepare("UPDATE tb_categoria SET nomeCategoria = :categoria WHERE idtb_categoria = $id");
			}else{
				$cmd = Conexao::getInstance()->prepare("INSERT INTO tb_categoria (nomeCategoria) VALUES(:categoria)");
			}
			$cmd->bindValue(":categoria", $categoria);
			$cmd->execute();
		}

		public function buscaCategoria(){

			$cmd = Conexao::getInstance()->prepare("SELECT idtb_categoria, nomeCategoria from tb_categoria");	
			$cmd->execute();
			$categorias =[];
			while ( $rs = $cmd->fetch(PDO::FETCH_OBJ)) {
				$categoria = new Categoria();
				$categoria->setIdCategoria($rs->idtb_categoria);
				$categoria->setNomeCategoria($rs->nomeCategoria);
				array_push($categorias, $categoria);
			}
			return $categorias;
		}

		function atulizarCategoria($source){ 

            $statement = 
            Conexao::getInstance()->prepare("SELECT idtb_categoria, nomeCategoria FROM tb_categoria WHERE idtb_categoria = :id");
            $statement->bindValue(":id", $source);
            if ($statement->execute()) {
            	$categoria = new categoria();
                $rs = $statement->fetch(PDO::FETCH_OBJ);
                $categoria->setIdCategoria($rs->idtb_categoria);
                $categoria->setNomeCategoria($rs->nomeCategoria);
                return $categoria;
            }else{
            	return NULL;
            }
		}

		public function remover($id){
			
            $cmd = Conexao::getInstance()->prepare("DELETE FROM tb_categoria WHERE idtb_categoria = :id");
            $cmd->bindValue(":id", $id);
            if($cmd->execute()){
                return "<script> alert('Registro excluído com sucesso!'); </script>";
            }else{
                throw new PDOException("<script> alert('Erro ao excluir categoria'); </script>");
            }

    	}
	
		public function tabelapaginada()
		    {
		        //endereço atual da página
		        $endereco = $_SERVER ['PHP_SELF'];
		        /* Constantes de configuração */
		        define('QTDE_REGISTROS', 2);
		        define('RANGE_PAGINAS', 3);
		        /* Recebe o número da página via parâmetro na URL */
		        $pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
		        /* Calcula a linha inicial da consulta */
		        $linha_inicial = ($pagina_atual - 1) * QTDE_REGISTROS;
		        /* Instrução de consulta para paginação com MySQL */
		        $dados = $this->buscaCategoria();
		        /* Conta quantos registos existem na tabela */
		        $valor = count($dados);
		        /* Idêntifica a primeira página */
		        $primeira_pagina = 1;
		        /* Cálcula qual será a última página */
		        $ultima_pagina = ceil($valor / QTDE_REGISTROS);
		        /* Cálcula qual será a página anterior em relação a página atual em exibição */
		        $pagina_anterior = ($pagina_atual > 1) ? $pagina_atual - 1 : 0;
		        /* Cálcula qual será a pŕoxima página em relação a página atual em exibição */
		        $proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual + 1 : 0;
		        /* Cálcula qual será a página inicial do nosso range */
		        $range_inicial = (($pagina_atual - RANGE_PAGINAS) >= 1) ? $pagina_atual - RANGE_PAGINAS : 1;
		        /* Cálcula qual será a página final do nosso range */
		        $range_final = (($pagina_atual + RANGE_PAGINAS) <= $ultima_pagina) ? $pagina_atual + RANGE_PAGINAS : $ultima_pagina;
		        /* Verifica se vai exibir o botão "Primeiro" e "Pŕoximo" */
		        $exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder';
		        /* Verifica se vai exibir o botão "Anterior" e "Último" */
		        $exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder';
		        if (!empty($dados)):
		            echo "
		     <table class='table table-striped table-bordered'>
		     <thead>
		       <tr style='text-transform: uppercase;' class='active'>
		        <th style='text-align: center; font-weight: bolder;'>ID</th>
		        <th style='text-align: center; font-weight: bolder;'>CATEGORIA</th>
		        <th style='text-align: center; font-weight: bolder;' colspan='2'>Ações</th>
		       </tr>
		     </thead>
		     <tbody>";
		            foreach ($dados as $source):
		                echo "<tr>
		                        <td style='text-align: center'>" . $source->getIdCategoria() . "</td>
		                        <td style='text-align: center'>" . $source->getNomeCategoria() . "</td>
		                        <td style='text-align: center'><a href='?act=upd&id=" . $source->getIdCategoria() . "' title='Alterar'><i class='ti-reload'></i></a></td>
		                        <td style='text-align: center'><a href='?act=del&id=" . $source->getIdCategoria() . "' title='Remover'><i class='ti-close'></i></a></td>
		                      </tr>";
		            endforeach;
		            echo "
		</tbody>
		    </table>
		     <div class='box-paginacao' style='text-align: center'>
		       <a class='box-navegacao  $exibir_botao_inicio' href='$endereco?page=$primeira_pagina' title='Primeira Página'> Primeira  |</a>
		       <a class='box-navegacao  $exibir_botao_inicio' href='$endereco?page=$pagina_anterior' title='Página Anterior'> Anterior  |</a>
		";
		            /* Loop para montar a páginação central com os números */
		            for ($i = $range_inicial; $i <= $range_final; $i++):
		                $destaque = ($i == $pagina_atual) ? 'destaque' : '';
		                echo "<a class='box-numero $destaque' href='$endereco?page=$i'> ( $i ) </a>";
		            endfor;
		            echo "<a class='box-navegacao $exibir_botao_final' href='$endereco?page=$proxima_pagina' title='Próxima Página'>| Próxima  </a>
		                  <a class='box-navegacao $exibir_botao_final' href='$endereco?page=$ultima_pagina'  title='Última Página'>| Última  </a>
		     </div>";
		        else:
		            echo "<p class='bg-danger'>Nenhum registro foi encontrado!</p>
		     ";
		        endif;
		    }
	}
		
 ?>