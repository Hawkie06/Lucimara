<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computador</title>
</head>
<body>
    <?php 
    require_once 'Computadores.php';
    $c1= new Computadores();
    /*$c1->tipo="Notebook";
    $c1->cor="Preto";
    $c1->marca="Dell";
    $c1->dtfabrica="2018";*/
    $c1->ligado=true;
     
    //$c1->desligado();
    $c1->mexer();

    print_r($c1);

    require_once 'Computadores.php';
    $c2= new Computadores;
    $c2->setTipo("PC");
    $c2->setCor("Branco");
    $c2->setMarca("Dell");
    $c2->setDtfabrica("2020");
    $c2->ligado=false;
     
   // $c2->desligado();
    $c2->mexer();

    print_r($c2);
    ?>
</body>
</html>