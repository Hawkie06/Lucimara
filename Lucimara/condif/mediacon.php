<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css.css">
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
            echo "$nome, sua média foi $media.";
            if($media<=50){
                echo "<br>Você está reprovado.";
            }else{
                if($media>=51 && $media<59){
                    echo "<br>Você está de recuperação";
                }
                else{
                    echo "<br>Você está aprovado";
                }
            }
            
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>