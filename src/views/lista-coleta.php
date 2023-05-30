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
    </header>

    <section class="resultado-lista">
        <?php                 
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
        ?>
    </section>
</body>
</html>