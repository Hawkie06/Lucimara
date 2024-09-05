<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<style>
    body{
            background-color: #c5c5c5;
        }
       h1{
        color: black;
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
        color: black;
       }
    </style>
<body>
    <center>
    <?php
    require_once ("class/database.class.php");
    $con = new Database();
    $link = $con->getConexao();
    if(isset($_GET)) {
        $nome=$_GET["nome"]?? 0;
        $email=$_GET["email"]?? 0;
        $usuario=$_GET["usuario"]??0;
        $senha=$_GET["senha"]??0;

        $smtm = $link->prepare("INSERT INTO cad_pessoas (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')");
        
        $smtm->execute();
      
    }
    
    echo "<h1>As suas informações estão corretas?</h1>
    <p>$nome<br>
    <p>$email<br>
    <p>$usuario<br>
    <p>$senha<br><br>
    Caso queira mudar algo, aperte no botão voltar.<br><br>"
    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </center>
</body>
</html>