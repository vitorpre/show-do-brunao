<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

include_once("includes/Conexao.class.php");
include_once("includes/Pergunta.class.php");
include_once("includes/PerguntaDAO.class.php");
include_once("includes/AcoesQuizz.class.php");



$nomeJogador = filter_input(INPUT_POST, "nomeJogador");

AcoesQuizz::iniciarJogo($nomeJogador);

$con = Conexao::getConexao();

AcoesQuizz::prosseguirProximaPergunta($con);


header('Location: pergunta.php');