<?php

# incluindo a classe Calculadora da camada model
include '../model/Calculadora.php';

$funcao = isset($_GET['funcao']) ? $_GET['funcao'] : 'listar';

// Chama o método correspondente ao valor do parâmetro 'action' usando reflexão
if (function_exists($funcao) && is_callable($funcao)) {
    $funcao();
} else {
    echo "Ação inválida";
}

function formulario(){
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	include '../view/formulario.php';
}

function soma(){
	$tipo = 'SOMA';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::somar($n1,$n2);
	include '../view/resultado.php';
}

function subtrair(){
	$tipo = 'SUBTRAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = $n1-$n2;
	include '../view/resultado.php';
}

function multiplicar(){
	$tipo = 'MULTIPLICAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = $n1*$n2;
	include '../view/resultado.php';
}

function dividir(){
	$tipo = 'DIVISÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = $n1/$n2;
	include '../view/resultado.php';
}

function formcliente(){
	include '../view/formcliente.php';
}

function salvar(){
	$nome= $_GET['nome'];
	$datanasc= $_GET['datanasc'];
	include '../view/resultadoCliente.php';
}

function formulario_r2g(){
	include '../view/formulario_r2g.php';
}

function raizquadrada(){
	$tipo = 'RAIZ QUADRADA';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$resultado = Calculadora::raizquadrada($n1);
	include '../view/resultado.php';
}

function raizes2grau(){
	$tipo = 'DIVISÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$n3 = '';
	if(isset($_GET['n3']))
		$n3 = $_GET['n3'];		
	
	$resultado = Calculadora::raizes2grau($n1,$n2,$n3);
	include '../view/resultado.php';
}

?>