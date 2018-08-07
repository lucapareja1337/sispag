<html>
<style >


</style>

    <head>
        <meta chaset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/Formulario.css" />
    </head>
 
    <body>
    

<div>

        <form method="POST" action="../controller/FormularioController.php">
            <h2>FORMULARIO SALARIAL</h2>
            <label for="nome">Nome</label>
<br>
            <input type="text" id="nome" name="_nome"  maxlength="10"  required placeholder="Seu primeiro nome...">

<br> 
            <label for="sobrenome">Sobrenome</label>
<br>   
            <input type="text" id="sobrenome" name="_sobrenome" maxlength="10"  required placeholder="Seu sobrenome...">
<br>

            <label for="salario">Salario</label>
<br>
            <input type="text" id="salario" name="_salario" maxlength="10"  required placeholder="Seu salario...">
<br>

            <label for="qtdfilhos">Quantidade de filhos</label>
<br>
            <input type="text" id="qtdfilhos" name="_qtdfilhos" placeholder="Quantos filhos tem...">
<br>         

            <label for="idade">Idade</label>
<br> 
            <input type="text" Idade="idade" name="_idade"  maxlength="2" required placeholder="Sua idade...">

<br>

            <label for="cpf">CPF</label>  
<br>
            <input type="text" id="cpf" name="_cpf" minlength="11" maxlength="11" required placeholder="Seu CPF...">

<br>

<div>
            <input type="submit" value="Enviar">
</div>
        </form>
</div> 
    </body>

</html>