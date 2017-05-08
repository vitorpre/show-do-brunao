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

$alternativaSelecionada = filter_input(INPUT_POST, "alternativaSelecionada");

AcoesQuizz::inserirRespostaPeguntaAtual($con, $alternativaSelecionada);
        
if($_SESSION["qtdJaPerguntado"] >= 10)
{
    AcoesQuizz::finalizarJogo($con);
    
    header('Location: ranking.php');
    exit;
    
}

AcoesQuizz::prosseguirProximaPergunta($con);

header('Location: pergunta.php');