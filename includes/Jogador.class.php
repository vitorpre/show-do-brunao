<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jogador
 *
 * @author vitor
 */
class Jogador
{
    private $idJogador;
    private $nome;
    private $pontuacao;
    
    function getIdJogador()
    {
        return $this->idJogador;
    }

    function setIdJogador($idJogador)
    {
        $this->idJogador = $idJogador;
    }
    
    function getNome()
    {
        return $this->nome;
    }

    function getPontuacao()
    {
        return $this->pontuacao;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setPontuacao($pontuacao)
    {
        $this->pontuacao = $pontuacao;
    }
    
    
    public function __construct($row = null)
    {
        if ($row != null)
        {
            $this->carregarObj($row);
        }
    }
    
    private function carregarObj($row)
    {
        $this->setIdJogador($row['idJogador']);
        $this->setNome($row['nome']);
        $this->setPontuacao($row['pontuacao']);
    }


    
    
}
