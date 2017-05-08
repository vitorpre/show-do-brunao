<?php

    session_start();

    header('Content-Type: text/html; charset=utf-8');


    include_once("includes/Conexao.class.php");
    include_once("includes/Pergunta.class.php");
    include_once("includes/PerguntaDAO.class.php");

    $con = Conexao::getConexao();
    
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

        

        <div id="login" class="container-fluid">

            <form class="form-horizontal" action="executa_iniciar_jogo.php" method="POST">
                
                <p>Informe seu nome para começar a jogar</p>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="textinput" name="nomeJogador" type="text" class="form-control input-md">
                    </div>
                </div>
                
                <div class="row">
                    <button id="botaoResponder" class="col-lg-4 offset-lg-4 ">
                        <p>Jogar</p>
                    </button>
                </div>
                
                    
                
            </form>


        </div>

        


    </body>

</html>