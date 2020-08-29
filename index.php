<!DOCTYPE html>
	<html lang="PT-br">
		<head>
			<title>NEBULIMED | Assistência Técnica Autorizada</title>
			<link rel="stylesheet" type="text/css" href="assets/css/estilos.css" media="all" />
			<link rel="shortcut icon" href="images/favicon.ico">
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		</head>
	
		<body>
			<!-- Cabeçalho -->
			<header>
				<img src="images/logotipo.png">
				<nav>
					<a href="index.php">INÍCIO</a>
					<a href="index.php?p=conteudo&a=sobre">SOBRE</a>
					<a href="index.php?p=conteudo&a=autorizadas">AUTORIZADAS</a>
					<a href="index.php?p=conteudo&a=contato">CONTATO</a>
				</nav>		
			</header>
			<!-- Principal -->
			<div id="conteudo">
				<?php 
					if (!empty($_GET['p']) && !empty($_GET['a'])) {
						
						include ('includes/'.$_GET['p'].'/'.$_GET['a'].'.php');
					}else {
						include('includes/conteudo/inicio.php');
					}
				?>
			</div>
			<!-- Rodapé -->
			<footer>
				<div class="container">
					<ul class="icons">
						<li>
							<h3>Contato</h3><br><br>
						</li>
						<li>
							<a href="mailto:assistencia@nebulimed.com.br" class="icon fa-envelope-o">
								<span class="label">Email: assistencia@nebulimed.com.br</span>
							</a>
						</li>
						<li>
							<span class="label">Telefone: (51) 3212-2748</span>
						</li>
						<li>
							<span class="label">Endereço: Rua Doutor Flores, 105 - Sala 513 - Centro Histórico, Porto Alegre - RS, 90020-122</span>
						</li>
						<li>
							<span class="label">Horário de Funcionamento: 09:00hs às 18:00hs</span>
						</li>
					</ul>
					<ul>
						<li>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13817.21850093487!2d-51.2249635!3d-30.0281173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8ec788d048d09c6!2sNEBULIMED!5e0!3m2!1spt-BR!2sbr!4v1596049162384!5m2!1spt-BR!2sbr" width="25%" height="150%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a href="index.php">Nebulimed | Assistência Técnica Autorizada</a> . Todos os direitos reservados.
				</div>
			</footer>
			</footer>
		</body>
	</html>