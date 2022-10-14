<?php

	//conexao com o banco
    $conn = new sqlite3($_SERVER['DOCUMENT_ROOT'] . '/assets/loja.sqlite');

    //Tabela de logins
    class logins{
    	public function query($conn, $query){
    		$result = $conn->query($query);
    		return $result;
    	}

    }

    class anuncios
    {
    	//insert into anuncios(titulo, descricao, marca, modelo, ano_fabricacao, ano_modelo, valor, foto_do_possante, status, owner)
    	function query($conn, $query){
    		$result = $conn->query($query);
    		return $result;
    	}


    	//insert into anuncios(titulo, descricao, marca, modelo, ano_fabricacao, ano_modelo, valor, foto_do_possante, status, owner) values('Lada Laika novinho', 'Vendo esse lada laika novinho. Teve um dono russo e um polonês.', 'Lada', 'Laika', 1981, 1980, 5000, 'assets/imagens/lada_laikazao.jpg', 'aberto', 'Matheus');
    	function insert($conn, $titulo, $descricao, $marca, $modelo, $ano_fabricacao, $ano_modelo, $valor, $foto_do_possante, $owner){
    		$result = $conn->query("INSERT INTO anuncios(titulo, descricao, marca, modelo, ano_fabricacao, ano_modelo, valor, foto_do_possante, status, owner) VALUES('$titulo', '$descricao', '$marca', '$modelo', " . (int)$ano_fabricacao . ", " . (int)$ano_modelo . ", $valor , '$foto_do_possante', 'aberto','$owner');");
    		return $result;
    	}

        function delete($conn, $id){
            $result = $conn->query("DELETE FROM anuncios WHERE id = '$id' ");
            return $result;
        }

        function update($conn, $id, $titulo, $descricao, $marca, $modelo, $ano_fabricacao, $ano_modelo, $valor){
            $result = $conn->query("UPDATE anuncios SET
             titulo = '$titulo',
              descricao = '$descricao',
               marca = '$marca',
                modelo = '$modelo',
                 ano_fabricacao = $ano_fabricacao,
                  ano_modelo = $ano_modelo,
                   valor = $valor
                    WHERE id = $id; ");
            return $result;
        }
    }

?>
