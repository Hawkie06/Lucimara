<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <main>
        <?php 
        $ano = $_GET ["anonas"];
        $idade = date("Y") - $ano;
         
        echo "<br>Você nasceu em $ano e terá $idade.";
       /* if($idade >= 18){
            $voto = "deve votar";
            $dirigir = "já pode dirigir";
        }
        else{
            $voto = "não pode votar";
            $dirigir = "não pode dirigir";
        }*/
        if($idade < 16){
            $voto = "não pode votar";
            $dirigir = "não pode dirigir";
        }
        else{
            if(($idade>=16 && $idade <18)||($idade>65)){
                $voto = "vota opcionalmente";
                $dirigir = "não pode dirigir";
            }
            else{
                $voto = "pode votar";
                $dirigir = "pode dirigir";
            }
        }
        echo "<br>Com esta idade você $voto e $dirigir."
        ?>
    </main>
</body>
</html>