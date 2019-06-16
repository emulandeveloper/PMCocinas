<?php 
session_start();
require_once '../controllers/POJOs/Armario.php';
require_once '../controllers/persistencia/Armarios.php';
require_once '../controllers/POJOs/Cocina.php';
require_once '../controllers/persistencia/Cocinas.php';
require_once '../controllers/POJOs/Img_armario.php';
require_once '../controllers/persistencia/img_armarios.php';
require_once '../controllers/POJOs/Img_cocina.php';
require_once '../controllers/persistencia/Img_cocinas.php';

$tCocinas = Cocinas::singletonCocinas();
$tArmarios = Armarios::singletonArmarios();

$cocinas = $tCocinas->getAllCocinas();
$armarios = $tArmarios->getAllArmarios();

$tImgArmarios = Img_armarios::singletonImgarmarios();
$tImgCocinas = Img_cocinas::singletonImgcocinas();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moreno</title>
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
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation
            ==========================================-->
        <nav id="menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand page-scroll" href="../#page-top"><img src="../img/logo_complet.png" style="margin-top: -20px"></a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="">
                        <li><a href="../#about" class="page-scroll">Nosotros</a></li>
                        <li><a href="../#services" class="page-scroll">Servicios</a></li>
                        <li><a href="../#portfolio" class="page-scroll">Proyectos</a></li>
                        <li><a href="#contact" class="page-scroll">Contacto</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse --> 
            </div>
        </nav>
        <div id="portfolio" style="background-color: #FFF">
            <div class="container">
                <div class="section-title text-center center">
                    <h2>Nuestros Proyectos</h2>
                    <p>Proyectos realizados en domicilio</p>
                    <hr>
                </div>
                <div class="categories" style="margin-top: -55px">
                    <ul class="cat">
                        <li>
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">Todos los proyectos</a></li>
                                <li><a href="#" data-filter=".cocina">Cocinas</a></li>
                                <li><a href="#" data-filter=".armario">Armarios</a></li>
                                <li><a href="#" data-filter=".commercial">Otros</a></li>
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="portfolio-items">
                        <?php foreach ($cocinas as $kit) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-4 <?php echo $kit['tipo']; ?>">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="../<?php echo $kit['img']; ?>" title="<?php echo $kit['modelo']; ?>" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4><?php echo $kit['modelo']; ?></h4>
                                        </div>
                                        <img src="../<?php echo $kit['img']; ?>" class="img-responsive" alt="Project Title"> </a> </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php foreach ($armarios as $war) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-4 <?php echo $war['tipo']; ?>">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="../<?php echo $war['img']; ?>" title="<?php echo $war['modelo']; ?>" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4><?php echo $war['modelo']; ?></h4>
                                        </div>
                                        <img src="../<?php echo $war['img']; ?>" class="img-responsive" alt="Project Title"> </a> </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section -->
        <div id="contact" style="margin-top: 150px; background-color: #FFF">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Datos de contacto</h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <h3>Contacto de infromación</h3>
                    <div class="contact-item"> <span>Dirección</span>
                        <p>Calle Vespasiano, 1<br>Mérida (Badajoz)
                        </p>
                    </div>
                    <div class="contact-item"> <span>Correo</span>
                        <p>morenococinas.info@gmail.com</p>
                      <p>informacion@morenococinas.es</p>
                    </div>
                    <div class="contact-item"> <span>Teléfono</span>
                        <p>630 29 16 29</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div style="width: 100%">
                        <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Calle%20Vespasiano%2C%201%2C%20M%C3%A9rida%2C%20Badajoz+(Moreno)&ie=UTF8&t=&z=18&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container text-center">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div>
                    <p>Designed by <a href="http://www.templatewire.com" rel="nofollow">EmulanDev</a></p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.1.11.1.js"></script> 
        <script type="text/javascript" src="../js/bootstrap.js"></script> 
        <script type="text/javascript" src="../js/SmoothScroll.js"></script> 
        <script type="text/javascript" src="../js/nivo-lightbox.js"></script> 
        <script type="text/javascript" src="../js/jquery.isotope.js"></script> 
        <script type="text/javascript" src="../js/jqBootstrapValidation.js"></script> 
        <script type="text/javascript" src="..//contact_me.js"></script> 
        <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>