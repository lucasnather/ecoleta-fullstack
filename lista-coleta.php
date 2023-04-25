<?php 
    include_once('conexao.php');

    $cidade = $_POST["cidade-pesquisa"];
    $estado = $_POST["estado-pesquisa"];

    $cidadeMinusculoEcapitalizado = ucwords(strtolower($cidade));
    $estadoMinusculoEcapitalizado = ucwords(strtolower($estado));

    $buscarColetaPontos = "SELECT * FROM cadastropontos WHERE cidade = '$cidadeMinusculoEcapitalizado' AND estado = '$estadoMinusculoEcapitalizado'";

    $resultadoBuscarColetaPontos = $conexao->query($buscarColetaPontos);

    $quantidadeDePontosEncontrados =  mysqli_num_rows($resultadoBuscarColetaPontos) == 1 ? mysqli_num_rows($resultadoBuscarColetaPontos) . " ponto encontrados" : mysqli_num_rows($resultadoBuscarColetaPontos) . " pontos encontrados"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Lista Coletas</title>
</head>
<body class="corpo-lista">
    <header class="cabecalho-lista-coleta">
        <section class="cabecalho">
            <a href="index.php"><img src="./img/home/logo-ecoleta.svg" alt="logo ecoleta"></a>
            <a href="index.php" class="link__cabecalho"><img src="./img/home/login.svg" alt="login icone"> Voltar para home</a>
        </section>

        <section>
            <?= "<p class='resultado-busca'>$quantidadeDePontosEncontrados</p>"?>
        </section>
    </header>

    <section class="resultado-lista">
        <?php 
            if(mysqli_num_rows($resultadoBuscarColetaPontos) > 0) 
            {
               while($dados = mysqli_fetch_array($resultadoBuscarColetaPontos)) {
                $entidade = $dados["entidade"];
                $endereco = $dados["endereco"];
                $numero = $dados["numero"];
                $cidade = $dados["cidade"];
                $estado = $dados["estado"];
                $coletas = $dados["coletas"];                

                $cardLista = <<<LISTA
                    <div class='card-lista'>
                        
                        <img src='./img/imagem.svg' alt=''/>
                        <div class='conteudo-lista'>
                            <p class='itens'>$coletas</p>
                            <p>$cidade, $estado, $entidade, $endereco, $numero</p>
                        </div>
                    </div>
                LISTA;

                echo $cardLista;
               }
            }
        ?>
    </section>
</body>
</html>