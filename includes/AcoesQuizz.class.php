<?php


class AcoesQuizz
{
    
    public static function prosseguirProximaPergunta($con)
    {
        $objPerguntaNova = PerguntaDAO::getPerguntaAleatoria($con, $_SESSION["perguntasJaFeitas"]);

        $_SESSION["idPerguntaAtual"] = $objPerguntaNova->getIdPergunta();
        $_SESSION["perguntasJaFeitas"][] = $objPerguntaNova->getIdPergunta();
        $_SESSION["qtdJaPerguntado"] += 1;
    }
    
    public static function iniciarJogo($nomeJogador)
    {
        self::resetarJogo();
        
        $_SESSION["nomeJogador"] = $nomeJogador;
    }
    
    public static function finalizarJogo($con)
    {
        $objJogador = new Jogador();
        $objJogador->setNome($_SESSION["nomeJogador"]);
        $objJogador->setPontuacao($_SESSION["pontuacao"]);

        JogadorDAO::salvar($con, $objJogador);
        
        self::resetarJogo();
    }
    
    public static function resetarJogo()
    {
        $_SESSION["idPerguntaAtual"] = null;
        $_SESSION["perguntasJaFeitas"] = array();
        $_SESSION["qtdJaPerguntado"] = 0;
        $_SESSION["nomeJogador"] = null;
        $_SESSION["pontuacao"] = 0;
    }
    
    public static function inserirRespostaPeguntaAtual($con, $alternativaSelecionada)
    {
        $objPergunta = PerguntaDAO::getPerguntaById($con, (int)$_SESSION["idPerguntaAtual"]);
        
        if($objPergunta->getAlternativaCorreta() === $alternativaSelecionada)
        {
            $_SESSION["pontuacao"] += 1;
        }
    }
    
}