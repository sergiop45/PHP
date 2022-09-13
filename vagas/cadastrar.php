<?php 

require("./vendor/autoload.php");


use app\Entity\Vaga;
$obj_vaga = new Vaga;

if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $obj_vaga->titulo = $_POST['titulo'];
    $obj_vaga->descricao = $_POST['descricao'];
    $obj_vaga->ativo = $_POST['ativo'];
    $obj_vaga->cadastrar();

    header('location: index.php?status=sucess');
    exit;
}




include("./includes/header.php");
include("./includes/formulario.php");

include("./includes/footer.php");


?>