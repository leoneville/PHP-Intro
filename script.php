<?php
// if(isset($_POST['nome'])){
//     $nome = $_POST['nome'];
// }

// if(isset($_POST['idade'])){
// 	$idade = $_POST['idade'];
// }

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){ //verifica se a variavel esta vazia
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor, preencha-o novamente !';
	header('location: index.php');
	return;
}

else if(strlen($nome) < 3){ //verifica a quantidade de caracteres que a string na variavel possui
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres !';
	header('location: index.php');
	return;
}

else if(strlen($nome) > 40){
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres !';
	header('location: index.php');
	return;
}

else if(empty($idade)){
	$_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia !';
	header('location: index.php');
	return;
}

else if(!is_numeric($idade)){ //verifica se a variavel possui ou não uma string numérica
	$_SESSION['mensagem-de-erro'] = 'Informe um número para a idade !';
	header('location: index.php');
	return;
}

// var_dump($nome);
// var_dump($idade);

 if($idade >= 6 && $idade <= 12) {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'infantil'){
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
			header('location: index.php');
			return;
		}
	}
 }
 else if($idade >= 13 && $idade <= 18) {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'adolescente'){
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
			header('location: index.php');
			return;
		}
	}
 }
 else {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'adulto'){
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
			header('location: index.php');
			return;
		}
	}
 }

//var_dump($nome);
//var_dump($idade);

//print_r($categorias);

?>