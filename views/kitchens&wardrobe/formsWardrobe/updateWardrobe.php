<?php
?>
<html lang="en">
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
        .btn-buscar {
            text-transform: uppercase;
            color: #FFF;
            background-color: #f56c40;
            border: 0;
            padding: 8px 15px;
            margin-left: 10%; 
            margin-top: 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-buscar:hover, .btn-buscar:focus, .btn-buscar.focus, .btn-buscar:active, .btn-buscar.active {
            color: #f56c40;
            background-color: #101010;
        }
    </style>
    <body style="background-color: transparent">

        <div class="allcontain container">
            <div class="feturedsection">
                <h1 class="text-center" style="font-family: 'Bree Serif', serif; font-size: 40px; text-decoration: #000 "> MODIFICAR COCHE</h1>
                <br>
                <hr>
            </div>
            <form name="formulario1" action="updateCoche.php" method="POST" enctype="multipart/form-data" style="margin-top: 5%; font-family: 'Comfortaa', sans-serif;">
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Identificador<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="id" name="id" readonly="readonly" value="<?php echo $info[0]['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Código vehiculo<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="codigo" name="codigo" readonly="readonly" value="<?php echo $info[0]['codigo'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Marca<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="nombre" name="marca" required value="<?php echo $info[0]['marca'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Modelo<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="nombre" name="modelo" required value="<?php echo $info[0]['modelo'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Año de matriculación<a style="color: red">*</a></label>
                    <input type="text" class="form-control" id="ano" name="ano" required value="<?php echo $info[0]['ano_mat'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Kilometros<a style="color: red">*</a></label>
                    <input type="number" class="form-control" id="kms" name="kms" minlength="0" required value="<?php echo $info[0]['kilometros'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Potencia (cv)<a style="color: red">*</a></label>
                    <input type="number" class="form-control" id="caballos" name="caballos" minlength="0" required value="<?php echo $info[0]['potencia_cv'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Precio<a style="color: red">*</a></label>
                    <input type="number" class="form-control" id="precio" name="precio" minlength="0" required value="<?php echo $info[0]['precio'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Tipo de cambio<a style="color: red">*</a></label>
                    <input type="text" class="form-control"  name="id_extras" required readonly="readonly" value="<?php echo $id_extras[0]['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Tipo de cambio<a style="color: red">*</a></label>
                    <input type="text" class="form-control"  name="cambio" required value="<?php echo $id_extras[0]['cambio'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Tipo de combustible<a style="color: red">*</a></label>
                    <input type="text" class="form-control" name="combustible" required value="<?php echo $id_extras[0]['combustible'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Deposito<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="deposito" minlength="0" required step="any" value="<?php echo $id_extras[0]['deposito'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Número de marchas<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="num_marchas" minlength="0" required value="<?php echo $id_extras[0]['num_marchas'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Número de plazas<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="num_plazas" minlength="0" required value="<?php echo $id_extras[0]['num_plazas'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Número de puertas<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="num_puertas" minlength="0" required value="<?php echo $id_extras[0]['num_puertas'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Tracción<a style="color: red">*</a></label>
                    <input type="text" class="form-control" name="traccion" minlength="0" required value="<?php echo $id_extras[0]['traccion'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Consumo urbano<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="c_urbano" minlength="0" required step="any" value="<?php echo $id_extras[0]['c_urbano'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Consumo medio<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="c_medio" minlength="0" required step="any" value="<?php echo $id_extras[0]['c_medio'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Consumo carretera<a style="color: red">*</a></label>
                    <input type="number" class="form-control" name="c_carretera" minlength="0" required step="any" value="<?php echo $id_extras[0]['c_carretera'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size: 14px; font-family: 'Comfortaa', fantasy">Foto de Cabecera<a style="color: red">*</a></label>
                    <input type="text" class="form-control" name="foto" minlength="0" required step="any" value="<?php echo $info[0]['foto'] ?>">
                </div>
                <button class="btn-clases" type="submit" value="Registrar" name="submit" style="margin-top: 20px; padding-bottom: 7px; padding-top: 7px; border-radius: 4px;">Actualizar</button>
            </form>
        </div>
    </body>
</html>