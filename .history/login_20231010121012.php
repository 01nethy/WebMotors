<?php 
//conexao
require_once("conexao.php");


//ADM
$senha = '123';
$senha_crip = md5($senha);

//Buscar no banco
$busca = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$result =$busca->fetchAll(PDO::FETCH_ASSOC); 
$total_result = count($result);

if ($total_result == 0) {
	$pdo->query("INSERT INTO usuarios SET nome ='Nethellyn', email ='$email_sistema', cpf ='000.000.000-00', senha ='$senha', senha_crip ='$senha_crip', nivel ='Administrador', data = curDate(), ativo = 'Sim'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Silva's Barber</title>

    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon.ico"> 

    <!-- Custom fonts for this template-->
    <link href="painelAdm/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="painelAdm/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem-vindo de volta!</h1>
                                    </div>
                                    <form class="user" accept-charset="UTF-8" role="form" action="autenticar.php" method="post">
                                        <div class="form-group">
                                            <input  name="email" type="text" class="form-control form-control-user"    placeholder="E-mail ou CPF" required>
                                        </div>
                                        <div class="form-group">
                                            <input name="senha" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Senha" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Lembre-me</label>
                                            </div>
                                        </div>
                                        <input  class="btn btn-primary btn-user btn-block" type="submit" value="Login">
                                            
                                        
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" title="Clique para recuperar a sua senha" href="recuperar.html">Esqueceu sua senha?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../cadastros/clientes.php">Crie sua conta!</a>
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