<?php

    session_start();

    header('Content-Type: text/html; charset=utf-8');


    include_once("includes/Conexao.class.php");
    include_once("includes/Pergunta.class.php");
    include_once("includes/PerguntaDAO.class.php");
    include_once("includes/Jogador.class.php");
    include_once("includes/JogadorDAO.class.php");

    $con = Conexao::getConexao();
    
    $arrMelhoresJogadores = JogadorDAO::getMelhoresJogadores($con, 10);
    
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
            <h2>Melhores Jogadores</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Acertos</th>
                        <th>Jogador</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($arrMelhoresJogadores as $objJogador) : ?>
                    <tr>
                        <td><?= $objJogador->getPontuacao(); ?></td>
                        <td><?= $objJogador->getNome(); ?></td>
                    </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>                

        </div>

        


    </body>

</html>