<?php 

namespace Ecoleta\Models;

require_once './vendor/autoload.php';

class Ecoleta 
{   
    public readonly string $entidade;
    public readonly string $endereco;
    public readonly float $numero;
    public readonly string $cidade;
    public readonly string $estado;
    public readonly string $coletas;
    public readonly int $id;

    public function __construct(
        string $entidade, string $endereco, float $numero, string $cidade, string $estado, string $coletas
    )
    {
        $this->entidade = $entidade;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->coletas = $coletas;
    }

    public function pegarId(int $id): int {
        return $this->id = $id;
    }
}

?>