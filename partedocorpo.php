<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "corpo";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

$CABECA = isset($_POST["CABECA"]) ? "1" : "0";
var_dump($CABECA);

$OMBRODIREITO = isset($_POST["OMBRODIREITO"]) ? "1" : "0";
var_dump($OMBRODIREITO);

$OMBROESQUERDO = isset($_POST["OMBROESQUERDO"]) ? "1" : "0";
var_dump($OMBROESQUERDO);

$COTOVELODIREITO = isset($_POST["COTOVELODIREITO"]) ? "1" : "0";
var_dump($COTOVELODIREITO);

$COTOVELOESQUERDO = isset($_POST["COTOVELOESQUERDO"]) ? "1" : "0";
var_dump($COTOVELOESQUERDO);

$BRAÇODIREITO = isset($_POST["BRAÇODIREITO"]) ? "1" : "0";
var_dump($BRAÇODIREITO);

$BRAÇOESQUERDO = isset($_POST["BRAÇOESQUERDO"]) ? "1" : "0";
var_dump($BRAÇOESQUERDO);

$MAODIREITA = isset($_POST["MAODIREITA"]) ? "1" : "0";
var_dump($MAODIREITA);

$MAOESQUERDA = isset($_POST["MAOESQUERDA"]) ? "1" : "0";
var_dump($MAOESQUERDA);

$PULSODIREITO = isset($_POST["PULSODIREITO"]) ? "1" : "0";
var_dump($PULSODIREITO);

$PULSOESQUERDO = isset($_POST["PULSOESQUERDO"]) ? "1" : "0";
var_dump($PULSOESQUERDO);


$COXADIREITA = isset($_POST["COXADIREITA"]) ? "1" : "0";
var_dump($COXADIREITA);

$COXAESQUERDA = isset($_POST["COXAESQUERDA"]) ? "1" : "0";
var_dump($COXAESQUERDA);


$QUADRIL = isset($_POST["QUADRIL"]) ? "1" : "0";
var_dump($QUADRIL);

$JOELHODIREITO = isset($_POST["JOELHODIREITO"]) ? "1" : "0";
var_dump($JOELHODIREITO);


$JOELHOESQUERDO = isset($_POST["JOELHOESQUERDO"]) ? "1" : "0";
var_dump($JOELHOESQUERDO);

$TORNOZELODIREITO = isset($_POST["TORNOZELODIREITO"]) ? "1" : "0";
var_dump($TORNOZELODIREITO);


$TORNOZELOESQUERDO = isset($_POST["TORNOZELOESQUERDO"]) ? "1" : "0";
var_dump($TORNOZELOESQUERDO);

$PEDIREITO = isset($_POST["PEDIREITO"]) ? "1" : "0";
var_dump($PEDIREITO);


$PEESQUERDO = isset($_POST["PEESQUERDO"]) ? "1" : "0";
var_dump($PEESQUERDO);



$comando = $conexao->query("INSERT INTO local (CABECA, OMBRODIREITO, OMBROESQUERDO, COTOVELODIREITO, COTOVELOESQUERDO, BRAÇODIREITO ,BRAÇOESQUERDO, MAODIREITA, MAOESQUERDA, PULSODIREITO, PULSOESQUERDO, COXADIREITA, COXAESQUERDA, JOELHODIREITO, JOELHOESQUERDO, TORNOZELODIREITO, TORNOZELOESQUERDO,PEDIREITO,PEESQUERDO) VALUES ('$CABECA', '$CABECA', '$OMBROESQUERDO', '$COTOVELODIREITO', '$COTOVELOESQUERDO', '$BRAÇODIREITO','$BRAÇOESQUERDO','$MAODIREITA', '$MAOESQUERDA', '$PULSODIREITO', '$PULSOESQUERDO', '$COXADIREITA', '$COXAESQUERDA', '$JOELHODIREITO', '$JOELHOESQUERDO', '$TORNOZELODIREITO', '$TORNOZELOESQUERDO, '$PEDIREITO', '$PEESQUERDO')");
