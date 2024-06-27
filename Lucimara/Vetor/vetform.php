<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido-bolos</title>
</head>
<body>
    <div>
    <?php

        $opcao = isset($_GET["mes"])?$_GET["mes"]:0;
        $mes = array ("Janeiro", "Fevereiro", "Março", "Abril");
        $dia = array (31, 28, 31, 30);
        echo "<br>O mês de $mes[$opcao] tem $dia[$opcao] dias.";

       /* $mes = isset($_GET["mes"])?$_GET["mes"]:1;
      switch($mes){
        case 1:
            $mes = array ("Janeiro", "Fevereiro", "Março", "Abril");
            $dia = array (31, 28, 31, 30, 31, 30);
            echo "<br>O mês de $mes[0] tem $dia[0] dias.";
            break;
        case 2:
            $mes = array ("Janeiro", "Fevereiro", "Março", "Abril");
            $dia = array (31, 28, 31, 30, 31, 30);
            echo "<br>O mês de $mes[1] tem $dia[1] dias.";
            break;
        case 3: 
            $mes = array ("Janeiro", "Fevereiro", "Março", "Abril");
            $dia = array (31, 28, 31, 30, 31, 30);
            echo "<br>O mês de $mes[2] tem $dia[2] dias.";
            break;
        case 4:
            $mes = array ("Janeiro", "Fevereiro", "Março", "Abril");
            $dia = array (31, 28, 31, 30, 31, 30);
            echo "<br>O mês de $mes[3] tem $dia[3] dias.";    
      }*/
   ?>
 </div>
 <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>