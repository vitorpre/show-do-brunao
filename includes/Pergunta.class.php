<?php

class Pergunta
{
    private $idPergunta;
    private $descricaoPergunta;
    private $alternativaA;
    private $alternativaB;
    private $alternativaC;
    private $alternativaD;
    private $alternativaE;
    private $alternativaCorreta;
    
    
    public function __construct($row = null)
    {
        if ($row != null)
        {
            $this->carregarObj($row);
        }
    }
    
    private function carregarObj($row)
    {
        $this->setIdPergunta($row['idPergunta']);
        $this->setDescricaoPergunta($row['descricaoPergunta']);
        $this->setAlternativaA($row['alternativaA']);
        $this->setAlternativaB($row['alternativaB']);
        $this->setAlternativaC($row['alternativaC']);
        $this->setAlternativaD($row['alternativaD']);
        $this->setAlternativaE($row['alternativaE']);
        $this->setAlternativaCorreta($row['alternativaCorreta']);
    }

    // <editor-fold defaultstate="collapsed" desc="Getter e Setters">
    function getIdPergunta()
    {
        return $this->idPergunta;
    }

    function getDescricaoPergunta()
    {
        return $this->descricaoPergunta;
    }

    function getAlternativaA()
    {
        return $this->alternativaA;
    }

    function getAlternativaB()
    {
        return $this->alternativaB;
    }

    function getAlternativaC()
    {
        return $this->alternativaC;
    }

    function getAlternativaD()
    {
        return $this->alternativaD;
    }

    function getAlternativaE()
    {
        return $this->alternativaE;
    }

    function getAlternativaCorreta()
    {
        return $this->alternativaCorreta;
    }

    function setIdPergunta($idPergunta)
    {
        $this->idPergunta = $idPergunta;
    }

    function setDescricaoPergunta($descricaoPergunta)
    {
        $this->descricaoPergunta = $descricaoPergunta;
    }

    function setAlternativaA($alternativaA)
    {
        $this->alternativaA = $alternativaA;
    }

    function setAlternativaB($alternativaB)
    {
        $this->alternativaB = $alternativaB;
    }

    function setAlternativaC($alternativaC)
    {
        $this->alternativaC = $alternativaC;
    }

    function setAlternativaD($alternativaD)
    {
        $this->alternativaD = $alternativaD;
    }

    function setAlternativaE($alternativaE)
    {
        $this->alternativaE = $alternativaE;
    }

    function setAlternativaCorreta($alternativaCorreta)
    {
        $this->alternativaCorreta = $alternativaCorreta;
    }
    // </editor-fold>


}
