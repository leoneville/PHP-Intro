<?php

function validaNome(string $nome) : bool{
	if(empty($nome)){ //verifica se a variavel esta vazia
		setarMensagemErro('O nome não pode ser vazio, por favor, preencha-o novamente !');
		return false;
	}

	else if(strlen($nome) < 3){ //verifica a quantidade de caracteres que a string na variavel possui
		setarMensagemErro('O nome não pode conter menos de 3 caracteres !');
		return false;
	}

	else if(strlen($nome) > 40){
		setarMensagemErro('O nome não pode conter mais de 40 caracteres !');
		return false;
	}
	return true;	
}

function validaIdade(string $idade) : bool{
	if(!is_numeric($idade)){ //verifica se a variavel possui ou não uma string numérica
		setarMensagemErro('Informe um número para a idade !');
		return false;
	}
	return true;
}

?>