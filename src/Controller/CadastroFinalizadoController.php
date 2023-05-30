<?php 

namespace Ecoleta\Controller;

use Ecoleta\Models\Ecoleta;
use Ecoleta\Repository\EcoletaRepository;

class CadastroFinalizadoController
{
    public function __construct(private EcoletaRepository $ecoletaRepository) {
        $this->ecoletaRepository = $ecoletaRepository;
    }

    public function processaRequisicao() {
        $nomeEntidade = $_POST["entidade"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $coleta = implode(" , ", $_POST["coleta"]);
   
        $cidadeMinusculoEcapitalizado = ucwords(strtolower($cidade));
        $estadoMinusculoEcapitalizado = ucwords(strtolower($estado));

        $cadastrar = $this->ecoletaRepository->cadastrar(new Ecoleta($nomeEntidade, $endereco, $numero, $cidadeMinusculoEcapitalizado, $estadoMinusculoEcapitalizado, $coleta));

        header("refresh:2;url=/");

        require_once './src/views/cadastro-finalizado.php';
    }
}


?>