<?php
/* COMANDOS DE SAIDA OUTPUT
	echo, print, var_dump, print_r
	
DADOS DE FORMULARIOS
	$_GET, $_POST
	
SESSOES
	$_SESSIONS
	
Arrays*/

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = 'Eduardo';
$idade = 15;

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