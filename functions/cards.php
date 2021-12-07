<?php
	class card_gen{
		function anuncio_aberto($titulo = '-', $descricao = '-', $marca = '-', $modelo = '-', $ano_fabricacao = '-', $ano_modelo = '-', $valor = '-', $foto_do_possante = 'default.jpg'){
			$id = str_replace(' ', '', $titulo);
			$card = '<!-- Content Row -->
					<div class="row">
				        <!-- Area Chart -->
				        <div class="col-12">
				            <div class="card border-left-primary shadow mb-4">
				                <!-- Card Header - Dropdown -->
				                <div
				                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				                    <h6 class="m-0 font-weight-bold text-primary"> ' . $titulo . '</h6>
				                </div>

				                <!-- Card Body -->
				                <div class="card-body">
				                    <div>
				                        <div class="row">
					                        <div class="col-5"><img style="width: 100%;" src="assets/imagens/' . $foto_do_possante . '" /></div>
					                        <div class="col-7">
					                            <p>' . $descricao . '</p>
					                            <hr>
					                            <p>Marca: ' . $marca . '</p>
					                            <p>Modelo: ' . $modelo . '</p>
					                            <p>Ano de fabricação: ' . $ano_fabricacao . '</p>
					                            <p>Ano do modelo: ' . $ano_modelo . '</p>
					                            <br>
					                            <p>Valor: R$' . $valor . '</p>
					                            <br>
					                        </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>';
			return $card;
		}

		function anuncio_aberto_owner($id, $titulo = '-', $descricao = '-', $marca = '-', $modelo = '-', $ano_fabricacao = '-', $ano_modelo = '-', $valor = '-', $foto_do_possante = 'default.jpg', $status = 'aberto'){
			
			echo '<script type="text/javascript">
						var item_' . $id . ' = [];
						item_' . $id . '.id_ = ' . $id . ';
						item_' . $id . '.titulo = "' . $titulo . '";
						item_' . $id . '.descricao = "' . $descricao . '";
						item_' . $id . '.marca = "' . $marca . '";
						item_' . $id . '.modelo = "' . $modelo . '";
						item_' . $id . '.ano_fabricacao = "' . $ano_fabricacao . '";
						item_' . $id . '.ano_modelo = "' . $ano_modelo . '";
						item_' . $id . '.valor = "' . $valor . '";
						item_' . $id . '.foto_do_possante = "' . $foto_do_possante . '";
					</script>';

			$card = '<!-- Content Row -->
					<div class="row">
				        <!-- Area Chart -->
				        <div class="col-12">
				            <div class="card border-left-primary shadow mb-4">
				                <!-- Card Header - Dropdown -->
				                <div class="card-header py-3">
				                    <div class="row">
					                   	<div class="col-10">
					                     	<h3 class="m-0 font-weight-bold text-primary"> ' . $titulo . '</h3>
					                    </div>
					                    <div class="col-2">
					                    	<form action="functions/delete_anuncio.php" method="POST">

					                    		<input type="hidden" name="item_id" value="' . $id . '">

						                    	<span data-toggle="modal" data-target="#mod_anuncio" class="btn btn-light" onclick="load_modal(item_' . $id . ')"><img src="assets/icons/pencil-square.svg" /></span>
						                    	<button type="submit" class="btn btn-light"><img src="assets/icons/trash-fill.svg" /></button>

						                    </form>
						                </div>
				                    </div>
				                </div>

				                <!-- Card Body -->
				                <div class="card-body">
				                    <div>
				                        <div class="row">
					                        <div class="col-md-5">
						                    	<span  data-toggle="modal" data-target="#mod_anuncio_img" class="btn btn-light" style="width: 100%;" onclick="load_modal_img(item_' . $id . ')"><img src="assets/icons/pencil-square.svg" /></span>
					                        	<img style="width: 100%;" src="assets/imagens/' . $foto_do_possante . '" />
					                        </div>
					                        <div class="col-md-7">
					                            <p>' . $descricao . '</p>
					                            <hr>
					                            <p>Marca: ' . $marca . '</p>
					                            <p>Modelo: ' . $modelo . '</p>
					                            <p>Ano de fabricação: ' . $ano_fabricacao . '</p>
					                            <p>Ano do modelo: ' . $ano_modelo . '</p>
					                            <br>
					                            <p>Valor: R$' . $valor . '</p>
					                            <br>
					                        </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>';
			return $card;
		}
	}
?>