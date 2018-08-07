<?php

//ABONO SALARIAL 
function _abono($_idade)
{
    $_abono=0;

    if($_idade>40)
    {
        return $_abono+=800;           
    }
    else
    {
        return $_abono;
    }
}

//SALARIO AJUSTADO

function _ajuste($_idade,$_qtdfilhos,$_salario)
{
    $_ajuste=0;

    if($_idade>50 && $_qtdfilhos>2)
    {
       return $_ajuste= $_salario*($_qtdfilhos*$_idade)/110;       
    }
    else
    {
        return $_ajuste; 
    }

}

//SALARIO FAMILIA
function _salarioFamilia($_qtdfilhos)
{
    $_salarioFamilia= $_qtdfilhos*30;

    return $_salarioFamilia;
}

?>

