<?php 

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/':
        echo 'pagina inicial';
        break;

    case '/cadastro':
        echo 'Cadastro de Aluno';
        break;    

    case '/listagem':
        echo 'Listagem de alunos';
        break;    

    default:
        echo 'Pagina inexistente!';
        break;
}

?>