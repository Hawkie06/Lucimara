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
      $qtde = isset($_GET["qtde"])?$_GET["qtde"]:0;
      $bolo = isset($_GET["bolo"])?$_GET["bolo"]:1;
      switch($bolo){
        case 1:
            $pedido = $qtde * 10;
            $escolha = "sonho de valsa";
            break;
        case 2:
            $pedido = $qtde * 8;
            $escolha = "chocolate";
            break;
        case 3: 
            $pedido = $qtde * 12;
            $escolha = "morango";
            break;
        case 4:
            $pedido = $qtde * 8;
            $escolha = "chocolate branco";    
      }
      echo "Você pediu $qtde pedaço(s) do bolo de $escolha, irá pagar $pedido reais.";
   ?>
 </div>
 <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>