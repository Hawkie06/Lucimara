<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo</title>
</head>
<body>
    <?php
   $nome = isset($_GET["nome"])?$_GET["nome"]:0;
   $sal = isset($_GET["sal"])?$_GET["sal"]:0;
   $vc = isset($_GET["vc"])?$_GET["vc"]:0;
   $anos = isset($_GET["anos"])?$_GET["anos"]:0;  
   
   $por=($sal*30)/100;
   $mes=$anos*12;
   $res=$vc/$mes;

   echo "30% do salário: $por <br>
   $anos Anos multiplicados por 12: $mes <br>
   valor da casa dividida pelos meses: $res <br><br>";

   if($res<=$por){
    echo "$nome, seu empréstimo foi aceito";
   }else{
    echo "$nome, seu empréstimo foi negado";
   }
   ?>
</body>
</html>