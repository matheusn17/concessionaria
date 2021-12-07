<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 row">
        <h1 class="h3 mb-0 text-gray-800 col-md-11">Marketplace</h1>
    </div>

    <?php
        include("./functions/db_commands.php");
        include("./functions/cards.php");

        $anuncios = new anuncios;
        $card_gen = new card_gen;

		$result = $anuncios->query($conn, "SELECT * FROM anuncios WHERE status = 'aberto' AND NOT owner = '" .$_SESSION['user'] . "'");

		while ($row = $result->fetchArray()){
		    $card = $card_gen->anuncio_aberto($row['titulo'], $row['descricao'], $row['marca'], $row['modelo'], $row['ano_fabricacao'], $row['ano_modelo'], $row['valor'], $row['foto_do_possante']);
		    echo $card;
		}

    ?>
</div>
<!-- /.container-fluid -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>