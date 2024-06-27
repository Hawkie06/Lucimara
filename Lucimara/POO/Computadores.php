<?php
class Computadores{
    public $tipo;
    public $cor;
    public $marca;
    public $dtfabrica;
    public $ligado;

    public function __construct()
    {
        $this->tipo ="Notebook";
        $this->cor ="Preto";
        $this->marca ="Dell";
        $this->dtfabrica ="2018";
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
          $this->tipo = $t;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){ 
        $this->cor = $c;
  }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($m){
          $this->marca = $m;
    }
    public function getDtfabrica(){
        return $this->dtfabrica;
    }
    public function setDtfabrica($d){ 
        $this->dtfabrica = $d;
  }

    public function mexer(){
    if ($this->ligado==true){
        echo '<p>O aparelho está ligado! Você pode utilizá-lo</p>';
    }else{
        echo '<p>O aparelho está desligado! Você não pode utilizá-lo</p>';   
    }
  }
  public function ligados(){
     $this->ligado=true; 
   }
   public function desligado(){
     $this->ligado=false; 
   }
}
?>