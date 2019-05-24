<?php
session_start();
require_once '../../../controllers/POJOs/Cocina.php';
require_once '../../../controllers/persistencia/Cocinas.php';

$tCocina = Cocinas::singletonCocinas();

$id = $_GET['id'];
$tCocina->borrarCocina($id);

header('Location:listKitchens.php');