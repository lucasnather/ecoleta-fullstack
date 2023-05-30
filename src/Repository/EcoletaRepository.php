<?php

namespace Ecoleta\Repository;

require_once './vendor/autoload.php';

use Ecoleta\Models\Ecoleta;
use PDO;

class EcoletaRepository
{
    public function __construct(private PDO $pdo)
    {
        
    }

    public function cadastrar(Ecoleta $ecoleta): Ecoleta {
        $sql = "INSERT INTO cadastropontos (entidade, endereco, numero,
        cidade, estado, coletas) VALUES (?, ?, ?, ?, ?, ?)";
    
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $ecoleta->entidade);
        $statement->bindValue(2, $ecoleta->endereco);
        $statement->bindValue(3, $ecoleta->numero);
        $statement->bindValue(4, $ecoleta->cidade);
        $statement->bindValue(5, $ecoleta->estado);
        $statement->bindValue(6, $ecoleta->coletas);
        $statement->execute();

        return $ecoleta;
    }

    public function listarColeta($cidade, $estado): array {
        $sql = "SELECT * FROM cadastropontos WHERE cidade = ? and estado = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $cidade);
        $statement->bindValue(2, $estado);
        $statement->execute();

        $coletas = $statement->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function($coleta) {
            $pegarColetas = new Ecoleta($coleta['entidade'], $coleta['endereco'],$coleta['numero'], $coleta['cidade'],$coleta['estado'], $coleta['coletas']);
            $pegarColetas->pegarId($coleta['id']);
            return $pegarColetas;
        }, $coletas);
    }

}


?>