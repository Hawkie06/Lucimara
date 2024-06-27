<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Média</h1>
        <p>
            <?php
            $nome= $_REQUEST["nome"]?? 0;
            $n1= $_REQUEST["n1"]?? 0;
            $n2= $_REQUEST["n2"]?? 0;
            $media = ($n1+$n2)/2;
            echo "$nome, sua média foi $media ";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>