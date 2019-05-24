<?php
session_start();
require_once '../../../controllers/POJOs/Armario.php';
require_once '../../../controllers/persistencia/Armarios.php';

$tArmario = Armarios::singletonArmarios();

$id = $_GET['id'];
$tArmario->borrarArmario($id);

header('Location:listWardrobe.php');
?>
