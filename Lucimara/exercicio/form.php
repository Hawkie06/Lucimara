<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
    <link rel="stylesheet" href="ola.css">
</head>
<body>
    <div>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:0;
      $gen = isset($_GET["gen"])?$_GET["gen"]:1;
      switch($gen){
        case 1:
          $mensagem = "Você é linda como um quadro de Van Gogh.";
          break;
        case 2:
          $mensagem = "Você é acolhedor como uma xícara de café num dia chuvoso.";
          break;
        case 3: 
          $mensagem = "Você é uma pessoa única como as constelações que cercam o universo.";
          break;
      
      }
      echo "Olá, $nome! $mensagem";
   ?>
 </div>
 <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>