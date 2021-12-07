<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LTPA - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Logar</h1>
                                    </div>
                                    <?php
                                        if(array_key_exists('error', $_GET)){
                                            if((int)$_GET['error'] == 1){
                                                echo('<div class="text-center">
                                                        <a class="small text-danger">Usuário não encotrado</a>
                                                    </div>');
                                            }elseif ((int)$_GET['error'] == 0) {
                                                echo('<div class="text-center">
                                                        <a class="small text-danger">Senha errada</a>
                                                    </div>');
                                            }elseif ((int)$_GET['error'] == 2) {
                                                echo('<div class="text-center">
                                                        <a class="small text-danger">É necessario estar logado para usar os serviços</a>
                                                    </div>');
                                            }
                                        } 
                                    ?>
                                    <form class="user" method="post" action="functions/logar.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="user" name="user"
                                                placeholder="Usuário">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="pw" name="pw" placeholder="Senha">
                                        </div>
                                        <hr>
                                        <input type="submit" value="Logar" class="btn btn-primary btn-user btn-block"></input>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="criar_conta.php">Não tenho conta. Criar uma nova!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

</body>

</html>