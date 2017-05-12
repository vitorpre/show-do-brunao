<?php

    session_start();

    header('Content-Type: text/html; charset=utf-8');


    include_once("includes/Conexao.class.php");
    include_once("includes/Pergunta.class.php");
    include_once("includes/PerguntaDAO.class.php");

    $con = Conexao::getConexao();
    
    $objPergunta = PerguntaDAO::getPerguntaById($con, (int)$_SESSION["idPerguntaAtual"]);
        
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
        <script src="js/main.js"></script>


    </head>

    <body>

        <form id="enviarResposta" action="executa_guardar_resposta.php" method="POST">

            <input type="hidden" name="alternativaSelecionada" id="alternativaSelecionada" />

            <div class="container">

                <div class="row">

                    <div class="col-lg-10 offset-lg-1">

                        <div class="container-fluid pergunta">

                            <div class="row d-flex">

                                <div class="col-lg-3  ">
                                    <img class="img-thumbnail" src="imagens/bruno_logo.jpg" class="" />
                                </div>

                                <div class="col-lg-9 ">
                                    <h1>Show do Brunão</h1>
                                    <p><?= $_SESSION["qtdJaPerguntado"] . " - " . $objPergunta->getDescricaoPergunta(); ?></p>
                                </div>


                            </div>


                        </div>

                        <div data-alternativa="A" class="container-fluid resposta">
                            <p>A - <?= $objPergunta->getAlternativaA(); ?></p>
                        </div>

                        <div data-alternativa="B" class="container-fluid resposta">
                            <p>B - <?= $objPergunta->getAlternativaB(); ?></p>
                        </div>

                        <div data-alternativa="C" class="container-fluid resposta">
                            <p>C - <?= $objPergunta->getAlternativaC(); ?></p>
                        </div>

                        <div data-alternativa="D" class="container-fluid resposta">
                            <p>D - <?= $objPergunta->getAlternativaD(); ?></p>
                        </div>

                        <div data-alternativa="E" class="container-fluid resposta">
                            <p>E - <?= $objPergunta->getAlternativaE(); ?></p>
                        </div>
                        
                        <br>

                        <div class="container-fluid">

                            <div id="botaoResponder" class="col-lg-4 offset-lg-4">
                                <p>Responder</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="modal fade" id="modalConfirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="imagens/bruno_pensativo.jpg" class="img-thumbnail">
                    <p class="frase-confirmacao">Tem Certeza disso?</p>

                    
                  </div>
                  <div class="modal-footer">

                        <button type="button" class="botao-resposta btn botao-resposta-nao" data-dismiss="modal">Não</button>
                        <button type="button" id="enviarFormulario" class="botao-resposta btn botao-resposta-sim">Sim</button>

                        
                  </div>
                </div>
              </div>
            </div>

        </form>

    </body>

</html>