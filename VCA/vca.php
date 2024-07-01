<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
     <?php
     $nome = $_GET["nome"];
     $a1 = $_GET["a1"];
     $a2 = $_GET["a2"];
     $a3 = $_GET["a3"];
     $a4 = $_GET["a4"];
     $a5 = $_GET["a5"];
     $a6 = $_GET["a6"];
     $a7 = $_GET["a7"];
     $a8 = $_GET["a8"];
     $a9 = $_GET["a9"];
     $a10 = $_GET["a10"];

     $b1 = $_GET["b1"];
     $b2 = $_GET["b2"];
     $b3 = $_GET["b3"];
     $b4 = $_GET["b4"];
     $b5 = $_GET["b5"];
     $b6 = $_GET["b6"];
     $b7 = $_GET["b7"];
     $b8 = $_GET["b8"];
     $b9 = $_GET["b9"];
     $b10 = $_GET["b10"];

     $c1 = $_GET["c1"];
     $c2 = $_GET["c2"];
     $c3 = $_GET["c3"];
     $c4 = $_GET["c4"];
     $c5 = $_GET["c5"];
     $c6 = $_GET["c6"];
     $c7 = $_GET["c7"];
     $c8 = $_GET["c8"];
     $c9 = $_GET["c9"];
     $c10 = $_GET["c10"];
   


   
     if ($a1=="1"){
        $ca=+1;
     }
     if ($a2=="3"){
        $ca=$ca+1;
     }
     if ($a3=="5"){
        $ca=$ca+1;
     }
     if ($a4=="7"){
        $ca=$ca+1;
     }
     if ($a5=="9"){
        $ca=$ca+1;
     }
     if ($a6=="11"){
        $ca=$ca+1;
     }
     if ($a7=="13"){
        $ca=$ca+1;
     }
     if ($a8=="15"){
        $ca=$ca+1;
     }
     if ($a9=="17"){
        $ca=$ca+1;
     }
     if ($a10=="19"){
        $ca=$ca+1;
     }
     

     //   

     if ($b1=="21"){
        $cb=+1;
     }

     if ($b2=="23"){
        $cb=$cb+1;
     }
     if ($b3=="25"){
        $cb=$cb+1;
     }
     if ($b4=="27"){
      $cb=$cb+1;
     }
     if ($b5=="29"){
      $cb=$cb+1;
     }
     if ($b6=="31"){
      $cb=$cb+1;
     }
     if ($b7=="33"){
      $cb=$cb+1;
     }
     if ($b8=="35"){
      $cb=$cb+1;
     }
     if ($b9=="37"){
      $cb=$cb+1;
     }
     if ($b10=="39"){
      $cb=$cb+1;
     }
     
     

     //
     if ($c1=="41"){
      $cc=+1;
   }

   if ($c2=="43"){
      $cc=$cc+1;
   }
   if ($c3=="45"){
      $cc=$cc+1;
   }
   if ($c4=="47"){
      $cc=$cc+1;
   }
   if ($c5=="49"){
      $cc=$cc+1;
   }
   if ($c6=="51"){
      $cc=$cc+1;
   }
   if ($c7=="53"){
      $cc=$cc+1;
   }
   if ($c8=="55"){
      $cc=$cc+1;
   }
   if ($c9=="57"){
      $cc=$cc+1;
   }
   if ($c10=="59"){
      $cc=$cc+1;
   }
   
  //

  if($ca>$cb&&$ca>$cc){
 echo"<h4>$nome, sua pontuação foi:</h4>
   SÉRIE A: $ca <br>
   SÉRIE B: $cb <br>
   SÉRIE C: $cc <br>
<h4>Sua maior pontuação foi na SÉRIE A, você é VISUAL</h4>
A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.<br><br>";
  }
  
  if($cb>$ca&&$cb>$cc){
   echo"<h4>$nome, sua pontuação foi:</h4>
     SÉRIE A: $ca <br>
     SÉRIE B: $cb <br>
     SÉRIE C: $cc <br>
  <h4>Sua maior pontuação foi na SÉRIE B, você é AUDITIVO</h4>
  A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.<br><br>";
     }
  if($cc>$cb&&$cc>$ca){
   echo"<h4>$nome, sua pontuação foi:</h4>
     SÉRIE A: $ca <br>
     SÉRIE B: $cb <br>
     SÉRIE C: $cc <br>
  <h4>Sua maior pontuação foi na SÉRIE C, você é CINESTÉSICO</h4>
 A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.<br><br>";
     }
     if($ca==$cb&&$ca>$cc){
      echo"<h4>$nome, sua pontuação foi:</h4>
        SÉRIE A: $ca <br>
        SÉRIE B: $cb <br>
        SÉRIE C: $cc <br>
     <h4>Sua maior pontuação foi na SÉRIE A e na SÉRIE B, suas caracteríticas predominantes são: VISUAL e AUDITIVO</h4>
   <h4>VISUAL</h4>
   A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.
   <br>
   <h4>AUDITIVO</h4>
   A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.<br><br>";
  }
  if($ca==$cc&&$ca>$cb){
   echo"<h4>$nome, sua pontuação foi:</h4>
     SÉRIE A: $ca <br>
     SÉRIE B: $cb <br>
     SÉRIE C: $cc <br>
  <h4>Sua maior pontuação foi na SÉRIE A e na SÉRIE C, suas caracteríticas predominantes são: VISUAL e CINESTÉSICO</h4>
<h4>VISUAL</h4>
A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.
<br>
<h4>CINESTÉSICO</h4>
A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.<br><br>";
}
  if($cc==$cb&&$cb>$ca){
   echo"<h4>$nome, sua pontuação foi:</h4>
     SÉRIE A: $ca <br>
     SÉRIE B: $cb <br>
     SÉRIE C: $cc <br>
  <h4>Sua maior pontuação foi na SÉRIE B e na SÉRIE C, suas caracteríticas predominantes são: AUDITIVO e CINESTÉSICO</h4>
<h4>AUDITIVO</h4>
A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.<br>
<h4>CINESTÉSICO</h4>
A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.<br><br>";
}
if($cc==$cb&&$cb==$ca){
   echo"<h4>$nome, sua pontuação foi:</h4>
     SÉRIE A: $ca <br>
     SÉRIE B: $cb <br>
     SÉRIE C: $cc <br>
     <h4>Você teve a mesma pontuação em todos os canais de aprendizado! Veja suas características:</h4>
     <h4>VISUAL</h4>
   A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.
   <br>
   <h4>AUDITIVO</h4>
   A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.
   <br>
   <h4>CINESTÉSICO</h4>
   A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.<br><br>";
}
     ?>
     
     <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>