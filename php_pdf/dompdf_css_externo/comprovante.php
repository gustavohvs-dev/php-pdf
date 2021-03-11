<?php

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	if (!empty($_POST['nome'])) {

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	$html = '
	<html>
		<head>
		<style>
			/** 
			* Set the margins of the PDF to 0
			* so the background image will cover the entire page.
			**/
			@page {
				margin: 0cm 0cm;
			}

			th,td,p,div,b ... {margin:0;padding:0}
			html{margin:40px 20px}

			/**
			* Define the real margins of the content of your PDF
			* Here you will fix the margins of the header and footer
			* Of your background image.
			**/
			body {
				margin-top:    3.5cm;
				margin-bottom: 1cm;
				margin-left:   1cm;
				margin-right:  1cm;
			}

			/** 
			* Define the width, height, margins and position of the watermark.
			**/
			#watermark {
				position: fixed;
				float: right;
				bottom:   0px;
				left:     0px;
				width:    4cm;
				height:   4cm;
				opacity: 0.4;

				/** Your watermark should be behind every content**/
				z-index:  -1000;
			}
					</style>
					<link href="css/pdf.css" rel="stylesheet">
				</head>
				<body>
					<!--<div id="watermark">
						<img class="float-right" src="..." width="100%" height="100%" /><hr/> 
					</div>-->

						<!-- The content of your PDF here -->
						
						<div class="container">
						<div class="sidebar-brand-icon">
						  <br>
						  <div class="container">
						  <div class="row">
						  <div class="col-lg-6">
						  <img class="img-fluid text-right" src="pdf_logo.png" alt="">		  
						  </div>
						  <div class="col-lg-6">
						  <h1 class="text-right">Comprovante de prova</h1>
						  <p class="text-right">Prova do líder</p>		
						  </div>
						  </div>
						  </div>
						  <br><br><br>
						  <hr>
						</div>
						</a>
						<br>
						<div class="col-lg 8">
						<table class="table">
						<thead class="thead-light">
							<tr>				
							<th scope="col">NOME DO CANDIDATO</th>
							<th scope="col">NÚMERO DE INSCRIÇÃO</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-light">
							<td>' . $_POST['nome'] . '</th>
							<td>' . $_POST['numero'] . '</th>
							</tr>
							<tr>
						</tbody>
						</table> 
						<div class="col-lg 6">
						<p class="text-dark mt-4 mb-2">Questão 1</p>
						<p class="text-dark">Quais tratativas o operador deve tomar mediante o alerta de perda de sinal?</p>
						<p class="text-secondary">' . $_POST['q1'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 2</p>
						<p class="text-dark">Em quanto tempo o operador deve tomar todas as ações para a tratativa da perda de sinal?</p>
						<p class="text-secondary">' . $_POST['q2'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 3</p>
						<p class="text-dark">Quais tratativas o operador deve tomar mediante o alerta de desvio de rota?</p>
						<p class="text-secondary">' . $_POST['q3'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 4</p>
						<p class="text-dark">Qual o tempo aceitável para a tratativa do evento de desvio de rota?</p>
						<p class="text-secondary">' . $_POST['q4'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 5</p>
						<p class="text-dark">É correto enviar o comando de sirene para o veiculo que gerou um alerta de botão de pânico?</p>
						<p class="text-secondary">' . $_POST['q5'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 6</p>
						<p class="text-dark">Quais ações o operador deve tomar mediante o alerta de botão de pânico?</p>
						<p class="text-secondary">' . $_POST['q6'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 7</p>
						<p class="text-dark">Quais alertas o operador deve priorizar?</p>
						<p class="text-secondary">' . $_POST['q7'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 8</p>
						<p class="text-dark">Quais as tratativas que o operador deve tomar mediante a mensagem de início de viagem?</p>
						<p class="text-secondary">' . $_POST['q8'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 9</p>
						<p class="text-dark">Quais são os comandos que devemos enviar para a P&W e seus respectivos horários?</p>
						<p class="text-secondary">' . $_POST['q9'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 10</p>
						<p class="text-dark">Quais os procedimentos que devem ser realizados mediante a uma solicitação de análise de perfil em nosso sistema?</p>
						<p class="text-secondary">' . $_POST['q10'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 11</p>
						<p class="text-dark">O que deve ser feito para realizar uma solicitação de checklist?</p>
						<p class="text-secondary">' . $_POST['q11'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 12</p>
						<p class="text-dark">O que é uma apólice de seguros?</p>
						<p class="text-secondary">' . $_POST['q12'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 13</p>
						<p class="text-dark">O que seria um PGR?</p>
						<p class="text-secondary">' . $_POST['q13'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 14</p>
						<p class="text-dark">Quais as regras para a análise de perfil?</p>
						<p class="text-secondary">' . $_POST['q14'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 15</p>
						<p class="text-dark">Quais procedimentos devem ser feitos para efetivar uma viagem na GR?</p>
						<p class="text-secondary">' . $_POST['q15'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 16</p>
						<p class="text-dark">Cite duas empresas que a inteligência embarcada não é obrigatória.</p>
						<p class="text-secondary">' . $_POST['q16'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 17</p>
						<p class="text-dark">Cite duas empresas que o sensor de baú não é obrigatório.</p>
						<p class="text-secondary">' . $_POST['q17'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 18</p>
						<p class="text-dark">Cite três sensores de um veiculo.</p>
						<p class="text-secondary">' . $_POST['q18'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 19</p>
						<p class="text-dark">Cite dois atuadores.</p>
						<p class="text-secondary">' . $_POST['q19'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 20</p>
						<p class="text-dark">De que forma o operador deve tratar uma mensagem de fim viagem?</p>
						<p class="text-secondary">' . $_POST['q20'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 21</p>
						<p class="text-dark">Qual procedimento para realização e finalização das viagens da Comandolog?</p>
						<p class="text-secondary">' . $_POST['q21'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 22</p>
						<p class="text-dark">Quais os procedimentos a serem feitos para realizar o monitoramento via APP (sistema EM Protege)?</p>
						<p class="text-secondary">' . $_POST['q22'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 23</p>
						<p class="text-dark">Descreva a função principal (ou as funções principais) da redundância.</p>
						<p class="text-secondary">' . $_POST['q23'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 24</p>
						<p class="text-dark">O que é inteligência embarcada? Cite um parâmetro que possa ser realizado utilizando esse recurso.</p>
						<p class="text-secondary">' . $_POST['q24'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 25</p>
						<p class="text-dark">No caso de uma queda de energia elétrica na empresa, qual o procedimento deve ser realizado?</p>
						<p class="text-secondary">' . $_POST['q25'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 26</p>
						<p class="text-dark">Em caso de falta de internet, qual o procedimento deve ser realizado?</p>
						<p class="text-secondary">' . $_POST['q26'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 27</p>
						<p class="text-dark">Caso o sistema de integração não esteja funcionando normalmente, quais os procedimentos devem ser realizados?</p>
						<p class="text-secondary">' . $_POST['q27'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 28</p>
						<p class="text-dark">Caso um colega de trabalho desmaie durante do seu plantão, o que deve ser feito? Não se esqueça de que você será líder de plantão e a operação não pode parar.</p>
						<p class="text-secondary">' . $_POST['q28'] . '<p>
						<br>
						<p class="text-dark mt-4 mb-2">Questão 29</p>
						<p class="text-dark">Caso algum funcionário esteja sendo coagido por um assaltante do lado de fora da empresa, o que você faria? E como você evitaria esse tipo de situação?</p>
						<p class="text-secondary">' . $_POST['q29'] . '<p>
						<br>
						</div>
						<br>

						</div>
						</div>
				</body>
			</html>
		';

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html($html);

	//$dompdf->setPaper('A4', 'landscape');
	
	//Renderizar o html
	$dompdf->render();
	
	$doc_name = $_POST['nome'];

	//Exibibir a página
	$dompdf->stream(
		"Comprovante de prova - $doc_name.pdf", 
		array(
			"Attachment" => true //Para realizar o download somente alterar para true
		)
	);

}

?>