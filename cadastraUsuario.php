<?php
	#Receber os dados do formulario
	$nome = $_GET['nome'];
	# Criar um arquivo txt

	$arquivo = fopen("usuarios.txt", "a+");

	# Escrevendo os dados do produto no arquivo

	fwrite($arquivo, $nome."\n");

	# Fechar o arquivo

	fclose($arquivo);

	# Redirecionar para a tabela com a listagem
	header("location: listaUsuarios.php");


?>