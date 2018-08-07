<?php
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Cupom Salarial</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" media="screen" href="../css/Cupom.css" />
     
</head>
   
    <body>
        <table>     
            <h2>Resultado do processamento</h2>
            <tr> 
               <td>Funcionário</td>
               <td> <?php echo $_SESSION['Nome'];?></td>
            </tr>
            <tr> 
               <td>Sobrenome</td>
               <td> <?php echo $_SESSION['Sobrenome'];?></td>
            </tr>
            <tr> 
               <td>CPF</td>
               <td> <?php echo $_SESSION['CPF'];?></td>
            </tr>
            <tr> 
               <td>Salario</td>
               <td> <?php echo $_SESSION['Salario'];?></td>
            </tr>
            <tr> 
               <td>Abono</td>
               <td> <?php echo $_SESSION['abono'];?></td>
            </tr>
            <tr> 
               <td>Reajuste</td>
               <td> <?php echo $_SESSION['salario_ajustado'];?></td>
            </tr>
            <tr> 
               <td>Salario Familia</td>
               <td> <?php echo $_SESSION['salario_familia'];?></td>
            </tr>
            <tr>
                <a href="http://localhost/SisPag/View_SisPag/Formularioview.php">Voltar<a/>
            </tr>
     </table>
 </body>
 
 
 </html>