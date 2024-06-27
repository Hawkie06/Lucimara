<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<style>
        body{
            background-color: rgb(143, 112, 179);
        }
       h1{
        color: aliceblue;
       }
       button{
        color: black;
        text-decoration: none;
       }
       button:hover{
        color:black;
        text-decoration:none;
        font-weight: bold;
        font-size: 15px;
       }
       p{
        color: white;
       }
    </style>
<body>
    <main>
        <h1>IMC</h1>
        <p>
            <?php
            $nome= $_REQUEST["nome"]?? 0;
            $altura= $_REQUEST["altura"]?? 0; 
            $peso= $_REQUEST["peso"]?? 0; 
            $imc= $peso/($altura*$altura);
            echo "<br>$nome de peso $peso kg e $altura de altura é igual a $imc";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>