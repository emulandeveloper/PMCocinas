<?php
session_start();
if (is_null($_SESSION['cod_empleado'])) {
    header('Location:../administrador.php');
} else {
    require_once '../../controllers/POJOs/Empleado.php';
    require_once '../../controllers/persistencia/Empleados.php';
    
    $tEmpleado = Empleados::singletonEmpleados();
    $empleado = $tEmpleado->getEmpleado($_SESSION['cod_empleado']);
    
    $submit = filter_input(INPUT_POST, 'submit');

    if (isset($submit)) {
        session_destroy();
        header('Location:../administrador.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <link rel="stylesheet" type="text/css"  href="../../fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css"  href="../../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"  href="../../css/style.css">


        <!-- Stylesheet ================================================== -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <style>

        .background-menu{
            padding: 0px; 
            margin: 5px; 
            background-color: #eeeeee; 
            border-radius: 10px;
        }

        .font-menu{
            font-size: 19px; 
            margin-right: 10px;
        }

        .font-menu-dropdown{
            font-size: 19px;
        }

        .exit{
            color: red;
            display:block;
            padding:.5rem 1rem
        }

        .exit:hover{
            color: #ff9999
        }
    </style>
    <body style="overflow: hidden">

        <nav class="navbar navbar-expand-xl navbar-light background-menu">
            <a class="navbar-brand" href="#" style="margin-left: 10px"><img src="../../img/logo_complet.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" style="margin-right: 150px">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link font-menu" href="viewsAdminK&W.php" >Inicio</a>
                    </li>
                    <li class="nav-item dropdown font-menu-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cocinas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="formsKitchens/uploadKitchens.php" target="principalView">Subir Cocina</a>
<!--                            <a class="dropdown-item" href="formsKitchens/updateKitchens.php" target="principalView">Editar proyecto</a>-->
                            <a class="dropdown-item" href="formsKitchens/listKitchens.php" target="principalView">Lista Cocinas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown font-menu-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Armarios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="formsWardrobe/uploadWardrobe.php" target="principalView">Subir Armarios</a>
<!--                            <a class="dropdown-item" href="formsWardrobe/updateWardrobe.php" target="principalView">Editar proyecto</a>-->
                            <a class="dropdown-item" href="formsWardrobe/listWardrobe.php" target="principalView">Lista Armarios</a>
                        </div>
                    </li>
                    <!--                    <li class="nav-item dropdown font-menu-dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Ofertas
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Añadir Oferta</a>
                                                <a class="dropdown-item" href="#">Editar Oferta</a>
                                                <a class="dropdown-item" href="#">Borrar Oferta</a>
                                            </div>
                                        </li>-->
                    <li class="nav-item font-menu-dropdown">
                        <a class="exit" href="#modalExit" data-toggle="modal" method="POST">
                            Salir
                        </a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-end" style="margin-right: 25px; font-size: 25px; color: #0056b3">
                <a class="fa fa-user">
                </a>
                <a style="color: #000; font-size: 20px;"><?php echo $empleado[0]['nombre'];?></a> 
            </div>
        </nav>
        <header>
            <div>
                <div style="height: 850px; overflow: hidden">
                    <object  name="principalView" data="../../principalView.html" width="100%" height="100%">
                        <!--Contenedor de información variada-->
                    </object>
                </div>
            </div>
            <div class="modal fade bd-example-modal-sm" id="modalExit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document" >

                    <div class="modal-content" style="background-color: #FFF"> 
                        <div class="modal-header" style="color: #FFF; background-color: #414a52; border-radius: 5px 5px 0px 0px">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="color: #414a52">
                            <form method="post" action="viewsAdminK&W.php" name="formularioIndex">
                                <div class="modal-header" style="color: #414a52; margin-bottom: 5px; margin-top: -15px">
                                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px">Cerrar Sesión</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Desea cerrar la sesión</p>
                                </div>
                                <div class="modal-footer" style="margin-bottom: -10px">
                                    <input type="submit" id="submit" name="submit" value="Si" class="btn btn-custom" style="padding: 5px 20px; margin-bottom: -5px">
                                    <input type="submit" id="" name="" value="No" class="btn btn-custom" style="padding: 5px 20px; margin-bottom: -5px; background-color: #f56c40">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
