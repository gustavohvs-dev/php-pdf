<?php

    // Variáveis de estilo

    $sidebarcolor = "bg-info";
    $titlecolor = "text-info";

?>

<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Prova do Líder</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark <?php echo $sidebarcolor;?> fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"
                ><span class="d-block d-lg-none">Prova do Líder</span><span class="d-none d-lg-block"><!--<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="" />--></span></a
            ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#introducao">Introdução</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#instrucoes">Instruções</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#prova">Prova</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">


            <!-- Introdução -->
            <section class="resume-section" id="introducao">
                <div class="resume-section-content">
                    <h1 class="mb-0">Prova do <span class="<?php echo $titlecolor;?>">Líder</span></h1>
                    <p class="lead mb-5">Estamos selecionando um novo líder para a central, boa sorte no processo seletivo!</p>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Instruções -->
            <section class="resume-section" id="instrucoes">
                <div class="resume-section-content">
                    <h2 class="mb-5">Instruções</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <p>Siga as instruções abaixo para realização da prova:</p>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>Preencha seu nome e o número de inscrição fornecido pelos coordenadores;
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>Responda as perguntas abertas e de múltipla escolha;
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>Aperte o botão de enviar e salve o documento gerado, esse é o seu documento comprobatório de realização da prova;
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>Aguarde o resultado, boa sorte!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Prova -->
            <section class="resume-section" id="prova">
                <div class="resume-section-content">
                    <h2 class="mb-5">Prova</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <form action="php_pdf/dompdf_css_externo/comprovante.php" method="POST">
                                
                                <!-- Questão aberta -->
                                <h3 class="mb-2">Dados do candidato</h3>
                                <p class="mb-2 text-dark">Nome completo</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <input name="nome" class="form-control" required="required" type="text" placeholder="">
                                    </div>
                                </div>
                                <p class="mb-2 text-dark">Número de inscrição</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <input name="numero" class="form-control" required="required" type="text" placeholder="">
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 1</h3>
                                <p class="mb-2 text-dark">Quais tratativas o operador deve tomar mediante o alerta de perda de sinal?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q1" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 2</h3>
                                <p class="mb-2 text-dark">Em quanto tempo o operador deve tomar todas as ações para a tratativa da perda de sinal?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q2" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 3</h3>
                                <p class="mb-2 text-dark">Quais tratativas o operador deve tomar mediante o alerta de desvio de rota?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q3" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 4</h3>
                                <p class="mb-2 text-dark">Qual o tempo aceitável para a tratativa do evento de desvio de rota?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q4" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 5</h3>
                                <p class="mb-2 text-dark">É correto enviar o comando de sirene para o veiculo que gerou um alerta de botão de pânico?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q5" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 6</h3>
                                <p class="mb-2 text-dark">Quais ações o operador deve tomar mediante o alerta de botão de pânico?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q6" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 7</h3>
                                <p class="mb-2 text-dark">Quais alertas o operador deve priorizar?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q7" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 8</h3>
                                <p class="mb-2 text-dark">Quais as tratativas que o operador deve tomar mediante a mensagem de início de viagem?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q8" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 9</h3>
                                <p class="mb-2 text-dark">Quais são os comandos que devemos enviar para a P&W e seus respectivos horários?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q9" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 10</h3>
                                <p class="mb-2 text-dark">Quais os procedimentos que devem ser realizados mediante a uma solicitação de análise de perfil em nosso sistema?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q10" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 11</h3>
                                <p class="mb-2 text-dark">O que deve ser feito para realizar uma solicitação de checklist?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q11" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 12</h3>
                                <p class="mb-2 text-dark">O que é uma apólice de seguros?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q12" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 13</h3>
                                <p class="mb-2 text-dark">O que seria um PGR?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q13" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 14</h3>
                                <p class="mb-2 text-dark">Quais as regras para a análise de perfil?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q14" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 15</h3>
                                <p class="mb-2 text-dark">Quais procedimentos devem ser feitos para efetivar uma viagem na GR?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q15" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 16</h3>
                                <p class="mb-2 text-dark">Cite duas empresas que a inteligência embarcada não é obrigatória.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q16" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 17</h3>
                                <p class="mb-2 text-dark">Cite duas empresas que o sensor de baú não é obrigatório.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q17" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 18</h3>
                                <p class="mb-2 text-dark">Cite três sensores de um veiculo.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q18" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 19</h3>
                                <p class="mb-2 text-dark">Cite dois atuadores.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q19" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 20</h3>
                                <p class="mb-2 text-dark">De que forma o operador deve tratar uma mensagem de fim viagem?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q20" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 21</h3>
                                <p class="mb-2 text-dark">Qual procedimento para realização e finalização das viagens da Comandolog?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q21" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 22</h3>
                                <p class="mb-2 text-dark">Quais os procedimentos a serem feitos para realizar o monitoramento via APP (sistema EM Protege)?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q22" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 23</h3>
                                <p class="mb-2 text-dark">Descreva a função principal (ou as funções principais) da redundância.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q23" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 24</h3>
                                <p class="mb-2 text-dark">O que é inteligência embarcada? Cite um parâmetro que possa ser realizado utilizando esse recurso.</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q24" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 25</h3>
                                <p class="mb-2 text-dark">No caso de uma queda de energia elétrica na empresa, qual o procedimento deve ser realizado?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q25" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 26</h3>
                                <p class="mb-2 text-dark">Em caso de falta de internet, qual o procedimento deve ser realizado? </p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q26" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 27</h3>
                                <p class="mb-2 text-dark">Caso o sistema de integração não esteja funcionando normalmente, quais os procedimentos devem ser realizados? </p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q27" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 28</h3>
                                <p class="mb-2 text-dark">Caso um colega de trabalho desmaie durante do seu plantão, o que deve ser feito?  Não se esqueça de que você será líder de plantão e a operação não pode parar.  </p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q28" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão aberta -->
                                <h3 class="mt-5 mb-2">Questão 29</h3>
                                <p class="mb-2 text-dark">Caso algum funcionário esteja sendo coagido por um assaltante do lado de fora da empresa, o que você faria? E como você evitaria esse tipo de situação?</p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <textarea rows="3" name="q29" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!-- Questão aberta -->

                                <!-- Questão fechada -->
                                <!--<h3 class="mt-5 mb-2">Questão x</h3>
                                <p class="mb-2 text-dark">Descrição da pergunta</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Alternativa 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Alternativa 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Alternativa 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Alternativa 4
                                    </label>
                                </div>-->
                                <!-- Questão fechada -->

                                <input type="submit" class="mt-5 mb-2 btn btn-primary float-right" value="Enviar prova">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>