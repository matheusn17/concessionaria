<?php
    include("db_commands.php");

    if(true){
        $anuncios = new anuncios;
        $anuncios->delete($conn, $_POST['item_id']);

        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }else{
        header("Location: ../index.php?page=gerenciar_veiculos"); 
        exit();
    }
?>