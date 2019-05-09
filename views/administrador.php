<?php 
session_start();
//require_once './POJOs/Usuario.php';
//require_once './persistencia/Usuarios.php';

$submit = filter_input(INPUT_POST, 'submit');

if (isset($submit)){
    $login = $_POST['login'];
    $password = hash('sha256', $_POST['password']);
    if (isset($login) & isset($password)) {

        $tUsuario = Usuarios::singletonUsuarios();
        $u = $tUsuario->getLogins($login, $password);
        if (!is_null($u)) {
            $_SESSION['login'] = $u->getLogin();
            $_SESSION['id_empleado'] = $u->getId_empleado();
            $_SESSION['id_cliente'] = $u->getId_cliente();
            $_SESSION['tipo'] = $u->getTipo();

            header('Location:viewAdministracion.php');
            }
        } else {
            header('Location:administracion.php? identificado = 1');
        }
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pedro Moreno e Hijos Cocinas</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicons
            ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body style="background-color: #fff">
        <div class="card container" style="width: 38rem; margin-top: 200px; ">
            <img class="card-img-top" src="../img/logo_complet.png" alt="Card image cap" style="padding: 10px 10px 20px 10px; margin-left: 85px">

            <?php
            /* @var $_GET type */
            if (isset($_GET['identificado'])) {
                if ($_GET['identificado'] == 1) {
                    ?> 
                    <div class="invalid-tooltip" style="color: #ff4b4b">
                        Usuario o Contraseña incorrectas.
                    </div><br>
                    <?php
                }
            }
            ?>
                    <form method="post" action="administracion.php" name="formularioIndex">
                <div class="modal-header" style="color: #414a52; margin-bottom: 5px; margin-top: -15px">
                    <h5 class="modal-title text-center" id="exampleModalLabel" style="font-size: 18px">Acceso Administrador</h5>
                </div>
                <div class="form-group" style="margin-top: 20px">
                    <label for="email" class="col-form-label" style="font-size: 20px">Usuario:</label>
                    <input type="text" name="login" class="form-control" id="email" style="background-color: #E7E7E7" placeholder="Introducir nombre de usuario">
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label" style="font-size: 20px">Contraseña:</label>
                    <input class="form-control" id="password" style="background-color: #E7E7E7" type="password" name="password" placeholder="Introducir contraseña">
                </div>
                <div class="modal-footer" style="margin-bottom: -20px">
                    <input type="submit" id="submit" name="submit" value="Acceder" class="btn btn-custom btn-lg page-scroll" style="padding: 5px 20px; margin-bottom: -5px; margin-right: 95px">
                </div>
            </form>
        </div>

        <script type="text/javascript" src="../js/jquery.1.11.1.js"></script> 
        <script type="text/javascript" src="../js/bootstrap.js"></script> 
        <script type="text/javascript" src="../js/SmoothScroll.js"></script> 
        <script type="text/javascript" src="../js/nivo-lightbox.js"></script> 
        <script type="text/javascript" src="../js/jquery.isotope.js"></script> 
        <script type="text/javascript" src="../js/jqBootstrapValidation.js"></script> 
        <script type="text/javascript" src="../js/contact_me.js"></script> 
        <script type="text/javascript" src="../js/main.js"></script>   
    </body>
</html>