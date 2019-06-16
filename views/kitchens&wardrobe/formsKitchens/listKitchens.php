<?php
session_start();
require_once '../../../controllers/POJOs/Cocina.php';
require_once '../../../controllers/persistencia/Cocinas.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Autos J&L Rodriguez </title>
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="../img/icono.ico" rel="shortcut icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="../../../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome/css/font-awesome.css">

        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="../../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="../../../css/nivo-lightbox/default.css">
        <link rel="stylesheet" type="text/css" href="../../../css/util.css">
        <link rel="stylesheet" type="text/css" href="../../../css/maintable.css">
        <link rel="icon" type="image/png" href="../../../images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../../../vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    </head>
    <style>
        .btn-clases {
            text-transform: uppercase;
            color: #FFF;
            background-color: #f56c40;
            border: 0;
            padding: 14px 20px;
            margin: 0;
            font-size: 16px;
            border-radius: 0;
            margin-top: -200px;
            transition: all 0.3s;
        }
        .btn-clases:hover, .btn-clases:focus, .btn-clases.focus, .btn-clases:active, .btn-clases.active {
            color: #f56c40;
            background-color: #101010;
        }
        .elc-editar{
            color: #0E76A8;
            transition: all 0.5s;
            font-weight: 600;
        }
        .elc-editar:hover {
            color: #f56c40;
        }
        .elc-borrar{
            color: #f56c40;
            transition: all 0.5s;
            font-weight: 600;
        }
        .elc-borrar:hover {
            color: #0E76A8;
        }
    </style>
    <body style="background-color: transparent; overflow: hidden" >
        <div class="allcontain container-fluid">
            <div class="feturedsection text-center">
                <h1 class="text-center" style="font-family: 'Roboto', serif; font-size: 40px; text-decoration: #000; margin-top: 25px; margin-bottom: 25px">LISTADO DE COCINAS</h1>

            </div>
            <div class="limiter" style="margin-top: -55px">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table100 ver2 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1">Código Cocina</th>
                                            <th class="cell100 column2">Modelo</th>
                                            <th class="cell100 column3">Cliente</th>
                                            <th class="cell100 column4"></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                        <?php
                                        $tCocina = Cocinas::singletonCocinas();
                                        $listaC = $tCocina->getAllCocinas();

                                        foreach ($listaC as $fila) {
                                            ?>
                                            <tr class="row100 body">
                                                <td class="cell100 column1"><?php echo $fila['cod_cocina']; ?></td>
                                                <td class="cell100 column2"><?php echo $fila['modelo']; ?></td>
                                                <td class="cell100 column3"><?php echo $fila['nombre']; ?></td>
                                                <td class="cell100 column4">
                                                    <a class="elc-borrar" style="margin-left: -55px" href="deleteKitchens.php?id=<?php echo $fila['id'] ?>">Borrar</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../../../js/main.js"></script>-->
        <script src="../../../vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="../../../vendor/bootstrap/js/popper.js"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="../../../vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="../../../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script>
            $('.js-pscroll').each(function () {
                var ps = new PerfectScrollbar(this);

                $(window).on('resize', function () {
                    ps.update();
                })
            });


        </script>
        <!--===============================================================================================-->
        <script src="../../../js/maintable.js"></script>
    </body>
</html>