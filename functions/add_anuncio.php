<?php
    include("db_commands.php");

    session_start();

    $filename = explode('.', $_FILES['foto']['name'], 2);
    $temp = $filename[0];

    while (file_exists('../assets/imagens/' . $temp . '.' . $filename[1])) {
        $temp++;
    }

    $temp = $temp . '.' . $filename[1];
    copy( $_FILES['foto']['tmp_name'], "../assets/imagens/" . $temp);

    if(true){
        $anuncios = new anuncios;


        $anuncios->insert($conn, $_POST['titulo'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['ano_fabricacao'], $_POST['ano_modelo'], $_POST['valor'], $temp, $_SESSION['user']);

        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }else{
        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }
?>