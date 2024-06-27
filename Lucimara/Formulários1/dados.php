<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <header>
      <h1>Dados enviados</h1>
    </header>
    <main>
     <?php
     $nome = $_GET["nome"];
     $sobrenome = $_GET["sobrenome"];
     echo "<br>Bom te conhecer $nome $sobrenome";
     ?>
     <br>
     <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>