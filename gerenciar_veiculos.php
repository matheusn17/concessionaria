<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 row">
        <h1 class="h3 mb-0 text-gray-800 col-md-11">Marketplace</h1>
        <h1 class="h3 mb-0 text-gray-800 col-md-1"><span class="btn btn-success btn-circle" style="font-size: 32px;" data-toggle="modal" data-target="#add_anuncio">+</span></h1>
    </div>

    <?php
        include("./functions/db_commands.php");
        include("./functions/cards.php");

        $anuncios = new anuncios;
        $card_gen = new card_gen;

		$result = $anuncios->query($conn, "SELECT * FROM anuncios WHERE owner = '" .$_SESSION['user'] . "'");

		while ($row = $result->fetchArray()){
		    $card = $card_gen->anuncio_aberto_owner($row['id'], $row['titulo'], $row['descricao'], $row['marca'], $row['modelo'], $row['ano_fabricacao'], $row['ano_modelo'], $row['valor'], $row['foto_do_possante'], $row['status']);
		    echo $card;
		}

    ?>
</div>
<!-- /.container-fluid -->

<?php
    $intens = array();
?>

<!-- Modal Acdicionar Anuncio-->
<div class="modal fade" id="add_anuncio" tabindex="-1" role="dialog" aria-labelledby="add_anuncio_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Adicionar anúncio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="functions/add_anuncio.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do anúncio" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do anúncio" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do carro" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do carro" required>
            </div>

			<div class="form-group">
                <input type="number" class="form-control" id="ano_fabricacao" name="ano_fabricacao" placeholder="Ano de fabricação" required>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" id="ano_modelo" name="ano_modelo" placeholder="Ano do modelo" required>
            </div>

            <div class="form-group">
                <input type="number" step="0.01" type="text" class="form-control" id="valor" name="valor" placeholder="Por quanto pretende vender o caror?" required>
            </div>
            <hr>

            <div class="form-group">
            	<label for="foto">Foto do possante:</label>
                <input type="file" class="form-control-file borderless" value="fileupload" id="foto" name="foto" accept="image/*" required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </form>  
    </div>
  </div>
</div>


<!-- Modal Editar anuncio-->
<div class="modal fade" id="mod_anuncio" tabindex="-1" role="dialog" aria-labelledby="add_anuncio_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Editar anúncio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="functions/edit_anuncio.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <input id="id_edit" name="id" type="hidden" value=""></input>

            <div class="form-group">
                <input type="text" class="form-control" id="titulo_edit" name="titulo" placeholder="Título do anúncio" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="descricao_edit" name="descricao" placeholder="Descrição do anúncio" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" id="marca_edit" name="marca" placeholder="Marca do carro" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="modelo_edit" name="modelo" placeholder="Modelo do carro" required>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" id="ano_fabricacao_edit" name="ano_fabricacao" placeholder="Ano de fabricação" required>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" id="ano_modelo_edit" name="ano_modelo" placeholder="Ano do modelo" required>
            </div>

            <div class="form-group">
                <input type="number" step="0.01" class="form-control" id="valor_edit" name="valor" placeholder="Por quanto pretende vender o caror?" required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </form>  
    </div>
  </div>
</div>

<!-- Modal Mudar imagem-->
<div class="modal fade" id="mod_anuncio_img" tabindex="-1" role="dialog" aria-labelledby="add_anuncio_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Mudar imagem do carro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="functions/edit_anuncio_img.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <input id="id_img" name="id_" type="hidden" value=""></input>

            <div class="form-group">
                <label for="foto">Foto do possante:</label>
                <input type="file" class="form-control-file borderless" value="fileupload" id="foto" name="foto" accept="image/*" required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </form>  
    </div>
  </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


<script type="text/javascript">
    function load_modal(item) {
      $("#id_edit").prop('value', item.id_);
      $("#titulo_edit").prop('value', item.titulo);
      $("#descricao_edit").prop('value', item.descricao);
      $("#marca_edit").prop('value', item.marca);
      $("#modelo_edit").prop('value', item.modelo);
      $("#ano_fabricacao_edit").prop('value', item.ano_fabricacao);
      $("#ano_modelo_edit").prop('value', item.ano_modelo);
      $("#valor_edit").prop('value', item.valor);
    }

    function load_modal_img(item) {
      $("#id_img").prop('value', item.id_);
    }
</script>