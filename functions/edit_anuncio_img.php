<?php
    include("db_commands.php");

    session_start();
    echo $_POST['id_'] . "as";

    $filename = explode('.', $_FILES['foto']['name'], 2);
    $temp = $filename[0];

    while (file_exists('../assets/imagens/' . $temp . '.' . $filename[1])) {
        $temp++;
    }

    $temp = $temp . '.' . $filename[1];
    copy( $_FILES['foto']['tmp_name'], "../assets/imagens/" . $temp);

   

    if(true){
        $anuncios = new anuncios;


        $anuncios->query($conn, "UPDATE anuncios SET foto_do_possante = '" . $temp . "' where id =" . $_POST['id_'] . ";");

        header("Location:../index.php?page=gerenciar_veiculos"); 
        exit();
    }else{
        header("Location:../index.php?page=gerenciar_veiculos"); 
        exit();
    }
?>