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
class PerguntaDAO
{
    
    public static function salvar(PDO $conexao, Pergunta $objPergunta)
    {
        
        $objStatement = $conexao->query("INSERT INTO pergunta "
                . "("
                    . "descricaoPergunta, "
                    . "alternativaA,"
                    . "alternativaB,"
                    . "alternativaC,"
                    . "alternativaD,"
                    . "alternativaE,"
                    . "alternativaCorreta"
                . ") "
                . "VALUES"
                . "("
                    . "'" . $objPergunta->getDescricaoPergunta() . "',"
                    . "'" . $objPergunta->getAlternativaA() . "',"
                    . "'" . $objPergunta->getAlternativaB() . "',"
                    . "'" . $objPergunta->getAlternativaC() . "',"
                    . "'" . $objPergunta->getAlternativaD() . "',"
                    . "'" . $objPergunta->getAlternativaE() . "',"
                    . "'" . $objPergunta->getAlternativaCorreta() . "'"
                . ");");
        
        return $objStatement->execute();
        
    }
    
    public static function getPerguntaById(PDO $conexao, $idPergunta)
    {
        $objPergunta = null;
        
        $objStatement = $conexao->prepare("SELECT * FROM pergunta WHERE idPergunta = :idPergunta ");
        $objStatement->bindParam(":idPergunta", $idPergunta);
        
        if ($objStatement->execute())
        {
            $row = $objStatement->fetch();
            
            if($row != "")
            {
                $objPergunta = new Pergunta($row);
            }
            
        }
        
        return $objPergunta;
        
    }
    
    public static function getPerguntaAleatoria(PDO $conexao, array $arrIdsJaUsados)
    {
        if(count($arrIdsJaUsados) == 0)
            $arrIdsJaUsados[] = "0";
        
        $objPergunta = null;
        
        
        $objStatement = $conexao->prepare("SELECT * FROM pergunta WHERE idPergunta NOT IN (" . implode(",",$arrIdsJaUsados) . ") ORDER BY RAND() LIMIT 1");
        
        print_r($objStatement->debugDumpParams());
        
        if ($objStatement->execute())
        {
            $row = $objStatement->fetch();
            
            if($row != "")
            {
                $objPergunta = new Pergunta($row);
            }
            
        }
        
        return $objPergunta;
        
    }
    
    
}
