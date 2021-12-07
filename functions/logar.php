<?php

	include("./db_commands.php");

	$user = $_POST["user"];
	$pw = $_POST["pw"];

	$logins = new logins;

	$result = $logins->query($conn, "SELECT * FROM logins WHERE usuario = '$user'");
	$already_has = 0;

	while ($row = $result->fetchArray()){
                if ($row['senha'] == $pw) {
                	session_start();
                	$_SESSION['user'] = $row['usuario'];

                	header("Location:/index.php");
                	exit;
                }else{
                	header("Location:/login.php?error=0");
                	exit;
                }
            }

	header("Location:/login.php?error=1");

    exit;
?>