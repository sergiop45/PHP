<?php 

include('Controller/AlunoController.php');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/app/':
        echo 'pagina inicial';
        break;

    case '/app/cadastro':
        AlunoController::form();
        break;    

    case '/app/listagem':
        AlunoController::index();
        break; 
        
    case '/app/aluno/save':
        AlunoController::save();
        break;
    
    case '/app/aluno/delete':
        AlunoController::delete();
        break;

    default:
        echo 'Not Found! Erro 404';
        break;
}

?>