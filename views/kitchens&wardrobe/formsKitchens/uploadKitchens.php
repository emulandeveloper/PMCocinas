<?php
session_start();
require_once '../../../controllers/POJOs/Cocina.php';
require_once '../../../controllers/persistencia/Cocinas.php';
require_once '../../../controllers/POJOs/Empleado.php';
require_once '../../../controllers/persistencia/Empleados.php';
require_once '../../../controllers/POJOs/Img_cocina.php';
require_once '../../../controllers/persistencia/Img_cocinas.php';

$submit = filter_input(INPUT_POST, 'submit');
if (isset($submit)) {

    $tCocina = Cocinas::singletonCocinas();
    $id = $tCocina->getUltimoId();
    $id_ultimo = str_pad($id, 4, "0", STR_PAD_LEFT);
    $cod_cocina = "kit" . $id_ultimo;
    $modelo = filter_input(INPUT_POST, 'modelo');
    $nombre = filter_input(INPUT_POST, 'nombre');
    $activo = 1;
    $tipo_c = 'cocina';
    $id_empleado = 1;

    $c = new Cocina(null, $id_empleado, $cod_cocina, $nombre, $modelo, $tipo_c, $activo);
    $insertado = $tCocina->addCocina($c);

    if (!empty($insertado)) {
        $tImg = Img_cocinas::singletonImgcocinas();
        $id_cocina = $tCocina->getUltimoId();

        for ($x = 0; $x < count($_FILES["file0"]["name"]); $x++) {

            $file = $_FILES["file0"];
            $nombreF = $file["name"][$x];
            $tipo = $file["type"][$x];
            $ruta_provisional = $file["tmp_name"][$x];
            $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/PDcocinas/img/cocinas/';

            $src = $carpeta . $nombreF;
            move_uploaded_file($ruta_provisional, $src);
            $ruta_img = '/img/cocinas/' . $nombreF;
            $i = new Img_cocina(null, $id_cocina, $ruta_img);
            
            $insert = $tImg->addImg($i);
            
        }
        echo "<p style='color: blue'>Las imágenes se han subida correctamente <p>";
    }
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Moreno </title>
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
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </head>
    <style>
        .btn-clases {
            text-transform: uppercase;
            color: #FFF;
            background-color: #062c33;
            border: 0;
            padding: 14px 20px;
            margin: 0;
            font-size: 16px;
            border-radius: 0;
            margin-top: -200px;
            transition: all 0.3s;
        }
        .btn-clases:hover, .btn-clases:focus, .btn-clases.focus, .btn-clases:active, .btn-clases.active {
            color: #062c33;
            background-color: #cccccc;
        }

    </style>
    <body>

        <div class="allcontain container" style="padding: 40px">
            <div class="text-center" style="font-family: 'Roboto', serif;">
                <h1 class="text-center" style=" font-size: 45px; text-decoration: #000; font-weight: 600 ">AÑADIR PROYECTO</h1>
                <br>
                <hr>
            </div>
            <form name="formulario" action="uploadKitchens.php" method="POST" enctype="multipart/form-data" id="formulario" style="margin-top: 5%; font-family: 'Comfortaa', sans-serif;">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Modelo<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="nombre" name="modelo" required >
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Nombre<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required >
                </div>
                <div class="form-groups col-md-6">
                    <label for="exampleFormControlFile1" style="font-size: 14px; font-family: 'Comfortaa', fantasy;">Imágenes<a style="color: red">* </a></label>
                    <input type="file" class="form-control-file" id="file0" name="file0[]" multiple style="padding-left: 10px"><br>
                </div>
                <br>
                <input class="btn-clases" id="btn" type="submit" value="Registrar" name="submit" style="margin-top: 20px; padding-bottom: 7px; padding-top: 7px; border-radius: 4px;">
            </form>
        </div>
        <div class="container center-block">
            <div id="respuesta">
                
            </div>
            <h3>VISTA PREVIA</h3>
            <div class="container" id="vista-previa0">

            </div>
        </div>
        <script src="cargarimg.js">

        </script>
    </body>
</html>