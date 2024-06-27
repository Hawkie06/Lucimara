<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
    <style>
        body{
            background-color: rgb(143, 112, 179);
        }
       h1{
        color: aliceblue;
       }
       a{
        color: black;
        text-decoration: underline;
       }
       a:hover{
        color:white;
        text-decoration:none;
        font-weight: bold;
        font-size: 30px;
       }
    </style>
</head>
<body>
<header>
      <h1>Oh! Que interessante</h1>
    </header>
    <main>
     <?php
     $filme = $_GET["filme"];
     $livro = $_GET["livro"];
     echo "<br>Eu adoro $filme e queria muito ler $livro!";
     ?>
     <br>
     <a href="javascript:history.go(-1)">Quer me falar sobre outros?</a>
    </main>
</body>
</html>