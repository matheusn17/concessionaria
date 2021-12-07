<?php
    include("db_commands.php");

    session_start();
    echo $_POST['id'];
    if(true){
        $anuncios = new anuncios;

        $anuncios->update($conn, $_POST['id'], $_POST['titulo'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['ano_fabricacao'], $_POST['ano_modelo'], $_POST['valor']);


        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }else{
        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }
?>