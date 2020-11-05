<?php
// if(isset($_POST['nome'])){
//     $nome = $_POST['nome'];
// }

// if(isset($_POST['idade'])){
// 	$idade = $_POST['idade'];
// }

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){ //verifica se a variavel esta vazia
	echo 'O nome não pode ser vazio';
	return;
}

if(strlen($nome) < 3){ //verifica a quantidade de caracteres que a string na variavel possui
	echo 'O nome deve conter mais de 3 caracteres';
	return;
}

if(strlen($nome) > 40){
	echo 'O nome é muito extenso';
	return;
}

if(!is_numeric($idade)){ //verifica se a variavel possui ou não uma string numérica
	echo 'Informe um número para idade';
	return;
}

if(empty($idade)){
	echo 'A idade não pode ser vazia';
	return;
}

// var_dump($nome);
// var_dump($idade);

 if($idade >= 6 && $idade <= 12) {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'infantil'){
			echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
		}
	}
 }
 else if($idade >= 13 && $idade <= 18) {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'adolescente'){
			echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
		}
	}
 }
 else {
	for($i = 0; $i < sizeof($categorias); $i++){
		if($categorias[$i] == 'adulto'){
			echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
		}
	}
 }

//var_dump($nome);
//var_dump($idade);

//print_r($categorias);

?>