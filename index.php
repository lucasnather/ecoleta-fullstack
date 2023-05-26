
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <title>Ecoleta</title>
</head>
<body>
    <header>
        <section class="cabecalho">
            <a href="index.php"><img src="./img/home/logo-ecoleta.svg" alt="logo ecoleta"></a>
            <a href="cadastro-coleta.php" class="link__cabecalho"><img src="./img/home/login.svg" alt="login icone"> Cadastre um ponto de coleta</a>
        </section>
    </header>

    <main>
        <section class="marketplace">
            <div class="conteudo__marketplace">
                <h1 class="titulo__marketplace">Seu marketplace de coleta de resíduos.</h1>
                <p class="paragrafo__marketplace">Ajudamos pessoas a encontrarem pontos de coleta de forma eficiente.</p>
                <div class="centraliza-botao">
                    <button class="botao__marketplace" id="abrir-modal">
                        <img src="./img/home/buscar.svg" alt="icone buscar" class="img__botao__marketplace">
                        <p class="paragrafo__botao__marketplace">Pesquisar pontos de coleta</p>
                    </button>
                </div>
            </div>

            <div class="container-img__marketplace">
                <img src="./img/home/pessoinhas.svg" alt="pessoas coletando lixo" class="img__home">
            </div>
        </section>
    </main>

    <dialog id="modal" class="modal-pesquisa">
        <section class="pesquisa-pontos">
            <div class="container-titulo__dialog">
                <h2 class="titulo__pesquisa-pontos">Pontos de coleta</h2>
                <p class="fechar-modal" id="fechar-modal">fechar</p>
            </div>

            <form action="lista-coleta.php" method="post">
                <input type="text" name="cidade-pesquisa" id="cidade-pesquisa" placeholder="Digite a cidade" class="input__pesquisa-pontos">

                <input type="text" name="estado-pesquisa" id="estado-pesquisa" placeholder="Digite o estado" class="input__pesquisa-pontos">

                <input type="submit" value="Buscar" name="botao-pesquisa" class="input__pesquisa-pontos botao__pesquisa-pontos">
            </form>
        </section>
    </dialog>

    <script src="./js/modal-pesquisa.js"></script>
    <script src="./js/cadastro-finalizado.js"></script>
</body>
</html>