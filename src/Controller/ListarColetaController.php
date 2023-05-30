<?php

namespace Ecoleta\Controller;

use Ecoleta\Repository\EcoletaRepository;

class ListarColetaController
{
    public function __construct(private EcoletaRepository $ecoletaRepository)
    {
        $this->ecoletaRepository = $ecoletaRepository;
    }

    public function processaRequisicao() {
        $cidade = $_POST["cidade-pesquisa"];
        $estado = $_POST["estado-pesquisa"];

        $cidadeFormatada = ucwords(strtolower($cidade));
        $estadoFormatado = ucwords(strtolower($estado));
        $dados = $this->ecoletaRepository->listarColeta($cidadeFormatada, $estadoFormatado);

        foreach($dados as $dado) {
            $entidade = $dado->entidade;
            $endereco = $dado->endereco;
            $numero = $dado->numero;
            $cidade = $dado->cidade;
            $estado = $dado->estado;
            $coletas = $dado->coletas;
        }

        require_once './src/views/lista-coleta.php';
    }
}


?>