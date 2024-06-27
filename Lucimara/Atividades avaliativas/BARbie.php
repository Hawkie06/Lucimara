<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bb.css">  
</head>
<body>
    <div>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:0;
      $idade= isset($_GET["idade"])?$_GET["idade"]:1;
      switch($idade){
        case 1:
          echo"$nome, você é menor! Infelizmente a única Barbie que você vai ver é o desenho.";
          break;
        case 2:
            echo"$nome, você pode entrar! Mas, como ainda é menor, apenas acompanhado de um maior.";
            break;
        case 3: 
            echo"$nome, seja bem-vindo(a) a DREAMHOUSE!.";
            break;
      
      }
    
   ?>
 </div>
</body>
</html>