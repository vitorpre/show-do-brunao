<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerguntaDAO
 *
 * @author vitor
 */
class JogadorDAO
{
    
    public static function salvar(PDO $conexao, Jogador $objJogador)
    {
        
        $objStatement = $conexao->query("INSERT INTO jogador "
                . "("
                    . "nome, "
                    . "pontuacao"
                . ") "
                . "VALUES"
                . "("
                    . "'" . $objJogador->getNome() . "',"
                    . "'" . $objJogador->getPontuacao() . "'"
                . ");");
        
        return $objStatement->execute();
        
    }
    
    public static function getMelhoresJogadores(PDO $conexao, $qtdJogadores)
    {
        $arrMelhoresJogadores = null;
        
        $objStatement = $conexao->prepare("SELECT * FROM jogador ORDER BY pontuacao DESC LIMIT 10 ");
        $objStatement->bindParam(":qtdJogadores", $qtdJogadores);
        
        if ($objStatement->execute())
        {
            $arrMelhoresJogadores = array();
            
            while($row = $objStatement->fetch())
            {
                $arrMelhoresJogadores[] = new Jogador($row);
            }
            
            
        }
        
        
        return $arrMelhoresJogadores;
        
    }
    
    
}
