<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro Coletas</title>
</head>
<body>
    <header>
        <section class="cabecalho">
            <a href="index.php"><img src="./img/home/logo-ecoleta.svg" alt="logo ecoleta"></a>
            <a href="index.php" class="link__cabecalho"><img src="./img/home/login.svg" alt="login icone"> Voltar para home</a>
        </section>
    </header>

    <main>
        <section class="formulario-cadastro">
            <h2 class="titulo__formulario-cadastro">Cadastro do <br> Ponto de Coleta</h2>

            <h3 class="subtitulo__formulario-cadastro">Dados da Entidade</h3>
            
            <form action="cadastro-finalizado.php" method="post" id="formulario-cadastro">
                <div class="grupo-input">
                    <label for="nome-entidade" class="label__formulario-cadastro">Nome da entidade</label>

                    <input type="text" name="entidade" id="nome-entidade" class="input__formulario-cadastro" required>
                </div>

                <div class="grupo-input grupo-input-endereco">
                    <div class="containerinput-endereco__formulario-cadastro">
                        <label for="endereco" class="label__formulario-cadastro">Endereço</label>

                        <input type="text" name="endereco" id="endereco" class="input__formulario-cadastro" required>
                    </div>

                    <div>
                        <label for="numero" class="label__formulario-cadastro">Número</label>
                        <input type="number" name="numero" id="numero" class="input__formulario-cadastro" required>
                    </div>
                </div>

                <div class="grupo-input grupo-input-cidade">
                    <div class="containerinput-cidade__formulario-cadastro">
                        <label for="cidade" class="label__formulario-cadastro">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="input__formulario-cadastro" required>
                    </div>

                    <div class="containerinput-cidade__formulario-cadastro">
                        <label for="estado" class="label__formulario-cadastro">Estado</label>
                        <input type="text" name="estado" id="estado" class="input__formulario-cadastro" required>
                    </div>
                </div>

                
                <div class="itens-coleta">
                    <div class="container-titulo__itens-coleta">
                        <h3 class="titulo__itens-coleta">Ítens de coleta</h3>
                        <p class="paragrafo__itens-coleta">Selecione um ou mais ítens abaixo</p>
                    </div>

                    <div class="campos-checkbox__itens-coleta">

                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="lampadas" >
                                <img src="./img/cadastro/lampadas.svg" alt="lampadas">
                                <p>Lâmpadas</p>
                                <input type="checkbox" name="coleta[]" id="lampadas" value="Lâmpadas" class="input-check">
                            </label>
                        </div>
                        
                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="baterias" >
                                <img src="./img/cadastro/baterias.svg" alt="baterias">
                                <p>Pilhas e Baterias</p>
                                <input type="checkbox" name="coleta[]" id="baterias" value="Pilhas e Baterias" class="input-check">
                            </label>
                        </div>
                        
                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="papeis-papelao" >
                                <img src="./img/cadastro/papei- e-papelao.svg" alt="papeis e papelao">
                                <p>Papéis e Papelão</p>
                                <input type="checkbox" name="coleta[]" id="papeis-papelao" value="Papéis e Papelão" class="input-check">
                            </label>
                        </div>
                        
                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="residuos-eletronicos" >
                                <img src="./img/cadastro/eletronicos.svg" alt="residuos eletronicos">
                                <p>Resíduos Eletrônicos</p>
                                <input type="checkbox" name="coleta[]" id="residuos-eletronicos" value="Resíduos Eletrônicos" class="input-check">
                            </label>
                        </div>
                        
                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="residuos-organicos" >
                                <img src="./img/cadastro/organicos.svg" alt="residuos-organicos">
                                <p>Resíduos Orgânicos</p>
                                <input type="checkbox" name="coleta[]" id="residuos-organicos" value="Resíduos Orgânicos" class="input-check">
                            </label>
                        </div>
                        
                        <div class="label__campos-checkbox__itens-coleta">
                            <label for="oleo" >
                                <img src="./img/cadastro/oleo.svg" alt="oleo">
                                <p>Óleo de Cozinha</p>
                                <input type="checkbox" name="coleta[]" id="oleo" value="Óleo" class="input-check">
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="container-botao">
                    <input type="submit" value="Cadastrar ponto de coleta" class="botao__formulario-cadastro" id="cadastrar" name="submit-cadastro">
                </div>
            </form>
        </section>
    </main>

    <script src="./js/checked.js"></script>
</body>
</html>
