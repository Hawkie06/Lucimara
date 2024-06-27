<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    //Funções: abs - valor absoluto. Valor ignorando seu sinal.
         //pow - potenciação
         //sqrt - raiz qudrada
         //round - arredondamento
         //intval - parte inteira
         //number_format - para formatar o resultado
         //<sup> - Elevar (HTML)

         //$n1= $_GET["a"]; 
         //$n2= $_GET["b"];   
         /*echo "O valor absoluto de $n2 é ". abs($n2);
         echo "<br/> O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2);
         echo "<br/> A raiz de $n1 é ". sqrt($n1);
         echo "<br/> O valor de $n2 arredondado é ". round($n2);
         echo "<br/> A parte inteira de $n2 é ". intval($n2);
         echo "<br/> O valor de $n1 em moeda é R$".number_format($n1,2,",",".");*/
        // echo "<br/> O valor $n1 em moeda é de R$ ".number_format($n1,2,",","."); 
        // echo " e este valor arredondado é R$ ". round($n1); 

        $n1= 100;
        $n2= 200;
        $total= $n1+$n2;
        $desconto= (10/100)*$total;
        $pfinal= $total-$desconto;
     echo "Ao comprar dois produtos de valor R$$n1 e R$$n2, o total da compra foi de R$$total.";
     echo " Este valor sofreu um desconto de 10%, ou seja, R$$desconto de desconto.";
     echo " O valor final então é de R$$pfinal."; 
    ?>
</body>
</html>