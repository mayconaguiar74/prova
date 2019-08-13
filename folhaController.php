<?php
	include_once("conexao.php");
	$objetoNoticia = new folha();
	if(filter_input(INPUT_POST, "nome") &&
	   filter_input(INPUT_POST, "cpf") &&
		filter_input(INPUT_POST, "ctps") &&
		filter_input(INPUT_POST, "cargo") &&
		filter_input(INPUT_POST, "mes")&&
		filter_input(INPUT_POST, "entrada")&&
		filter_input(INPUT_POST, "inicioIntervalo")&&
		filter_input(INPUT_POST, "fimIntervalo")&&
		filter_input(INPUT_POST, "saida")&&
		filter_input(INPUT_POST, "horaExtra")
	) {
		$nome = filter_input(INPUT_POST, "nome");
		$cpf = filter_input(INPUT_POST, "cpf");
		$ctps = filter_input(INPUT_POST, "ctps");
		$cargo = filter_input(INPUT_POST, "cargo");
		$mes = filter_input(INPUT_POST, "mes");
		$entrada = filter_input(INPUT_POST, "entrada");
		$inicioIntervalo = filter_input(INPUT_POST, "inicioIntervalo");
		$fimIntervalo = filter_input(INPUT_POST, "fimIntervalo");
		$saida = filter_input(INPUT_POST, "saida");	
		$horaExtra = filter_input(INPUT_POST, "horaExtra");		
		$dados=array($nome, $cpf, $ctps, $cargo, $mes, $entrada, $inicioIntervalo, $fimIntervalo, $saida, $horaExtra);
		$objetoNoticia->cadastrar($dados);
	}else {
		echo "Os campos não foram preenchidos!!!";	
	}
?>