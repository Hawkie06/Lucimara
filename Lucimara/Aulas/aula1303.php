<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais e Operador Ternário </title>
</head>
<body>
    <?php
    /*Operadores Relacionais:
    Maior > - $a > $b
    Menor <
    Maior ou igual >=
    Menor ou igual <=
    Diferente <> ou !=
    Igual ==
    Idêntico  ===

    Operador Ternário:
    expressão ? verdadeiro: falso
    $situacao = ($media >= 6) ? "Aprovado" : "Reprovado" 
    */
    /* $n1 = 7;
    $n2 = "7";

    $res = ($n1 == $n2) ? "Sim" : "Não";
    echo "O valor de $n1 é igual a $n2? $res .";*/
  
    $n1 = $_GET ["a"];
    $n2 = $_GET ["b"];
    $res= ($n1 == $n2) ? "Sim" : "Não";
    $resp = ($n1 == $n2) ? $n1+$n2 : $n1*$n2;
    echo "O valor de $n1 é igual a $n2? $res.";
    echo "<br> O resultado então é $resp.";
    ?>
</body>
</html>