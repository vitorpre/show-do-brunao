<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

include_once("includes/Conexao.class.php");
include_once("includes/Pergunta.class.php");
include_once("includes/PerguntaDAO.class.php");
include_once("includes/Jogador.class.php");
include_once("includes/JogadorDAO.class.php");
include_once("includes/AcoesQuizz.class.php");

$con = Conexao::getConexao();

$urlRetorno = "pergunta.php";

$alternativaSelecionada = filter_input(INPUT_POST, "alternativaSelecionada");

$acertouPergunta = AcoesQuizz::inserirRespostaPeguntaAtual($con, $alternativaSelecionada);
        
if($_SESSION["qtdJaPerguntado"] >= 10)
{        
    $urlRetorno = "ranking.php?jogador=" . $_SESSION["nomeJogador"] . "&pontuacao=" . $_SESSION["pontuacao"];
    
    AcoesQuizz::finalizarJogo($con);
}
else
{
    AcoesQuizz::prosseguirProximaPergunta($con);
}


?>


<html>
    <head>
        <title></title>

        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


        <link rel="stylesheet" href="layout.css">


    </head>

    <body>

        

        <div id="ranking" class="container-fluid">
            <img src="imagens/<?= ($acertouPergunta ? "bruno_certo.jpg" : "bruno_errado.jpg") ?>" class="img-thumbnail">
            <p class="frase-confirmacao"><?= ($acertouPergunta ? "Acertou!" : "Errou!") ?></p>
        </div>

        


    </body>

</html>

<script>window.setTimeout(function(){ window.location = "<?= $urlRetorno; ?>"; },2000);</script>