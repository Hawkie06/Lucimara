<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <?php
    require_once 'Livro2.php';
    $l1 = new Livro2;
   /* $l1->titulo="Fahrenheit 451";
    $l1->autor="Ray Bradbury";
    $l1->editora="Biblioteca Azul";
    $l1->npaginas="216";*/
    $l1->capa="mole";
    $l1->aberto=false;
    
   // $l1->fechar();
    $l1->folhear();

    print_r($l1);

    require_once 'Livro2.php';
    $l2 = new Livro2;
    $l2->titulo="Orgulho e Preconceito";
    $l2->autor="Jane Austen";
    $l2->editora="Penguin";
    $l2->npaginas="516";
    $l2->capa="mole";
    $l2->aberto=true;
    
    //$l2->fechar();
    $l2->folhear();

    print_r($l2);
    ?>
</body>
</html>