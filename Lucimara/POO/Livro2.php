<?php 
class Livro2{
var $titulo;
var $autor;
var $editora;
var $npaginas;
var $capa;
var $aberto;
public function __construct()
{
    $this->titulo ="Fahrenheit 451";
    $this->autor ="Ray Bradbury";
    $this->editora ="Biblioteca Azul";
    $this->npaginas ="216";
}
public function getTitulo(){
    return $this->titulo;
}
public function setTitulo($t){
      $this->titulo = $t;
}
public function getAutor(){
    return $this->autor;
}
public function setAutor($a){ 
    $this->autor = $a;
}
public function getEditora(){
    return $this->editora;
}
public function setEditora($e){
      $this->editora = $e;
}
public function getNpaginas(){
    return $this->npaginas;
}
public function setNpaginas($n){ 
    $this->npaginas = $n;
}

function folhear(){
    if ($this->aberto ==true){
       echo "<p>É possível folhear o livro!</p>";
    } else {
        echo "<p>Não é possível folhear, estou fechado!</p>";
    }
} 

function abrir(){
    $this->aberto=true;
}

function fechar(){
  $this->aberto=false;
}
}
?>