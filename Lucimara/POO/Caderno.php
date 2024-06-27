<?php
   class Caderno{
    //Atributos 
    /*var*/ public $tipo;
    public $cor;
    public $nfolhas;
    public $aberto;

    //Métodos e métodos especiais (Getters e Setters)
    public function __construct()//para construção automaticamente
    {
        $this->tipo ="Espiral";
        $this->cor ="Azul";
    }
    public function getTipo(){//Getters - permite acesso, dificultando acesso direto, garantindo segurança. 
        return $this->tipo;
    }
    public function setTipo($t){ //Setterrs - modificam coisas dentro dos objetos, com paramêtros
          $this->tipo = $t;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){ 
        $this->tipo = $c;
  }

   public function folhear(){
        if ($this->aberto==true){
           echo "<p>É possível folhear o caderno!</p>";
        } else {
            echo "<p>Não é possível folhear, estou fechado!</p>";
        }
    } 

    public function abrir(){
        $this->aberto=true;
    }

  public function fechar(){
      $this->aberto=false;
    }

   }
?>