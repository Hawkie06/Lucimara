<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
    <link rel="stylesheet" href="av.css">  
</head>
<body>
    <div>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:0;
      $sal = isset($_GET["sal"])?$_GET["sal"]:1;
      $ano = isset($_GET["ano"])?$_GET["ano"]:1;
      switch($ano){
        case 1:
          $aumento = $sal * 1.03;
          $mensagem = "você ganhava $sal reais, devido a sua contribuição de até três anos, você recebeu um aumento de 3% e seu salário agora é $aumento reais.";
          break;
        case 2:
            $aumento = $sal * 1.125;
            $mensagem = "você ganhava $sal reais, devido a sua contribuição de três a dez anos, você recebeu um aumento de 12,5% e seu salário agora é $aumento reais.";
            break;
        case 3: 
            $aumento = $sal * 1.20;
            $mensagem = "você ganhava $sal reais, devido a sua contribuição de dez anos ou mais, você recebeu um aumento de 20% e seu salário agora é $aumento reais.";
            break;
      
      }
      echo "Olá, $nome! $mensagem";
   ?>
 </div>
</body>
</html>