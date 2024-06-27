<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>
<body>
    <?php
    //comentário em uma linha
    /*
       Aqui podemos digitar o quanto for necessário.
    */ 
    /*
    $n1= 7;
    $n2= 5;
    $soma= $n1 + $n2;
    echo "A soma entre $n1 e $n2 é igual  a $soma;";
    echo "A soma entre $n1 e $n2, é igual a ". ($n1+$n2);

    $n1= 7;
    $n2= 5;
    $sub= $n1 - $n2;
    echo "<br> A subtração de $n1 e $n2 é igual  a $sub;";

    $n1= 7;
    $n2= 5;
    $div= $n1 / $n2;
    echo "<br> A  divisão de $n1 por $n2 é igual  a $div;";

    $n1= 7;
    $n2= 5;
    $multi= $n1 * $n2;
    echo "<br> A multiplicação de $n1 e $n2 é igual  a $multi;";

    $n1= 3;
    $n2= 3;
    $módulo= $n1 % $n2;
    echo " <br> O módulo/resto de $n1 por $n2 é igual  a $módulo;";
   */
   
   //Cálculo de média; para calcular médias, é necessário somar os numeros e dividir pelo numero deles.
   /*$n1= $_GET["a"]; //$n1= 100;
   $n2= $_GET["b"]; //$n2= 100;
   $n3= $_GET["c"]; //$n3= 100;
   $media= ($n1+$n2+$n3)/3;
   //Coloque no explorador http://localhost/Naty2.0/aula0803.php?a=valor&b=valor&c=valor
   echo "A média de $n1, $n2 e $n3 é igual a $media";*/
   //Cálculo de IMC; $peso/($altura*$altura)
   $peso= $_GET["a"]; 
   $altura= $_GET["b"]; 
   $imc= $peso/($altura*$altura);
   echo "<br> O IMC de uma pessoa de peso $peso kg e $altura de altura é igual a $imc";



    ?>
</body>
</html>