<?php 
    include_once('conexao.php');

    if(isset($_POST["submit-cadastro"])) {
        $nomeEntidade = $_POST["entidade"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $coleta = $_POST["coleta"];
        
        $itensColeta = implode(" , ", $coleta);
   
        $cidadeMinusculoEcapitalizado = ucwords(strtolower($cidade));
        $estadoMinusculoEcapitalizado = ucwords(strtolower($estado));
    
        $cadastrarPontosDeColeta = "INSERT INTO cadastropontos (entidade, endereco, numero,
        cidade, estado, coletas) VALUES ('$nomeEntidade', '$endereco', '$numero', '$cidadeMinusculoEcapitalizado', '$estadoMinusculoEcapitalizado', '$itensColeta')";
    
       $resultadoCadastroPontosDeColeta = mysqli_query($conexao, $cadastrarPontosDeColeta);

       header("refresh:2;url=index.php");
    }
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro Finalizado</title>
</head>
<body class="modal-cadastro-finalizado">
    <main class="principal__modal-cadastro-finalizado">
        <img src="./img/cadastro/check.svg" alt="checado">
        <p class="paragrafo__modal-cadastro-finalizado">Cadastro Finalizado com sucesso</p>
    </main>
</body>
</html>