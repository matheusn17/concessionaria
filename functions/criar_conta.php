<?php

	include("./db_commands.php");

	$user = $_POST["user"];
	$pw = $_POST["pw"];

	$logins = new logins;

	$result = $logins->query($conn, "SELECT * FROM logins WHERE usuario = '$user'");
	$already_has = 0;

	while ($row = $result->fetchArray()){
                $already_has = 1;
            }

    if ($already_has == 1) {
		header("Location:/criar_conta.php?ja_cadastrado=1");
    }else{
    	$logins->query($conn, "INSERT INTO logins(usuario, senha) values('$user', '$pw')");
		header("Location:/login.php");
    }

    exit;
?>