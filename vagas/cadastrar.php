<?php 

require("./vendor/autoload.php");

use app\Entity\Vaga;

if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $obj_vaga = new Vaga;
    $obj_vaga->titulo = $_POST['titulo'];
    $obj_vaga->descricao = $_POST['descricao'];
    $obj_vaga->ativo = $_POST['ativo'];
    $obj_vaga->cadastrar();

    
}


/*if(isset($titulo, $descricao, $ativo) ) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ativo = $_POST['ativo'];
    $data = $_POST['data'];
    die('Cadastrado!');
}
else {
    die('Envie todos os dados!');
}

echo 'titulo: '.$titulo;
echo 'descricao: '.$descricao;
echo 'ativo: '.$ativo;
echo 'data: '.$data;
*/



include("./includes/header.php");
include("./includes/formulario.php");

include("./includes/footer.php");


?>