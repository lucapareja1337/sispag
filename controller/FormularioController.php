<?php
session_start();

require_once("../library/Library.php");

$_dados= array(
    "_cpf" => $_POST["_cpf"],
    "_nome" => $_POST["_nome"],
    "_sobrenome" => $_POST["_sobrenome"],
    "_salario" => $_POST["_salario"],
    "_qtdfilhos" =>$_POST["_qtdfilhos"],
    "_idade" =>$_POST["_idade"]
);

$_SESSION['Nome']= $_dados["_nome"];
$_SESSION['CPF']= $_dados["_cpf"];
$_SESSION['Sobrenome']= $_dados["_sobrenome"];
$_SESSION['Salario']= $_dados["_salario"];
$_SESSION['Qtdfilhos']= $_dados["_qtdfilhos"];
$_SESSION['Idade']= $_dados["_idade"];

//sessão do abono
$_SESSION['abono'] =  _abono($_dados["_idade"]);

//sessão do salario ajustado
$_SESSION['salario_ajustado'] = _ajuste($_dados["_idade"],$_dados["_qtdfilhos"],$_dados["_salario"]);

//sessão do salario familia
$_SESSION['salario_familia']= _salarioFamilia($_dados["_qtdfilhos"]);

header("Location:../view/Cupomview.php");






?>