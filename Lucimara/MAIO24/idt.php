<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formrt</title>
</head>
<body>
<?php
    $nome = $_GET['nome'];
    $id= $_GET['idade']??0;
    $fases= $_GET['fases']??0;
    
    ?>
   <main>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="nome">Qual seu nome? </label>
    <input type="text" name="nome" id="idnome">
    <br>
    <br>
    <fieldset>
        <legend>Qual sua idade?</legend>
        <input type="radio" name="idade" id="ididade" value="1">
        <label for="menor">Até 12 anos</label>
        <input type="radio" name="idade" id="ididade" value="2">
        <label for="meio">13 a 25 anos</label>
        <input type="radio" name="idade" id="ididade" value="3">
        <label for="maior">acima de 25 anos</label>
        <br><br>
</fieldset>
<fieldset>
        <legend>Qual sua parte do dia preferida?</legend>
        <input type="radio" name="fases" value="1">
        <label for="m">Manhã</label>
        <input type="radio" name="fases" value="2">
        <label for="t">Tarde</label>
        <input type="radio" name="fases" value="3">
        <label for="n">Noite</label>
    </fieldset>
    <input type="submit" value="Enviar">
   </form>
</main>
<section>
     <?php
     if($id== 1 && $fases==1){
        echo "$nome, você tem muita vitalidade, a manhã brilha para você.";
    }
    else{
        if($id== 1 && $fases==2){
            echo "$nome, você ainda é jovem e brinca pelas tardes.";
        }
        else{
            if($id== 1 && $fases==3){
            echo "$nome, você não conhece a noite, porém as estrelas são as pequenas luzes que velam seu sono.";
        } 
        else{
            if($id== 2 && $fases==1){
                echo "$nome, você está começando a descobrir a vida come ela é, as manhãs ainda têm o mesmo sentido para você? ";
            }
            else{
                if($id== 2 && $fases==2){
                    echo "$nome, talvez as tardes não sejam mais divertidas, mas você ainda lembra da sensação?";
                }
                else{
                    if($id== 2 && $fases==3){
                    echo "$nome, algumas noites são passadas em claro, espero que as suas noites não sejam escuras.";
                }
                else{
                    if($id== 3 && $fases==1){
                    echo "$nome, as manhãs passam rápidas, aproveite o café como se fosse o último e viva o dia como se não houvesse outra manhã.";
                }
                else{
                    if($id== 3 && $fases==2){
                    echo "$nome, as tardes se arrastam e parecem infindáveis, mas lembre-se, fim de cada tarde, o sol descansa atrás das montanhas.";
                }
                else{
                    if($id== 3 && $fases==3){
                    echo "$nome, você ainda quer que outra noite venha?";
                }
            }
        }
        }
    }  
  }
 }
}
    }
    
     ?>
</section>
</body>
</html>