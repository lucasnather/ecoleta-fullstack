<?php

use Ecoleta\Controller\CadastroFinalizadoController;
use Ecoleta\Controller\ListarColetaController;
use Ecoleta\Repository\EcoletaRepository;

require_once 'conexao.php';

$repository = new EcoletaRepository($pdo);

if(!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/' ) {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once './src/views/ecoleta.php';
    } else if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new ListarColetaController($repository);
        $controller->processaRequisicao();
    }
} else if($_SERVER['PATH_INFO'] === '/cadastro-coleta') {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once './src/views/cadastro-coleta.php';
    } else if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new CadastroFinalizadoController($repository);
        $controller->processaRequisicao();
    }
} else if($_SERVER['PATH_INFO'] === '/coletas') {
    require_once './src/views/lista-coleta.php';
}

?>