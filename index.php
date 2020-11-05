<?php
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulário de inscrição</title>
	</head>

	<body>
		<p>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</p>

		<form action="script.php" method="post">
			<?php
				
				$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
				if(!empty($mensagemDeSucesso)){
					echo $mensagemDeSucesso;
				}

				$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
				if(!empty($mensagemDeErro)){
					echo $mensagemDeErro;
				}
			?>
			<p>Seu Nome: <input type="text" name="nome" /></p>
			<p>Sua Idade: <input type="text" name="idade" /></p>
			<p><input type="submit" value="Enviar dados do competidor"/></p>
			<p><input type="reset" value="Resetar dados"/></p>
		</form>

	</body>
</html>