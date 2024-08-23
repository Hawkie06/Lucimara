<?php
require_once("class/database.class.php");

$con = new Database();
$link = $con->getConexao();

$smtm = $link->prepare("select * from cadastro");
$smtm->execute();

$data = $smtm->fetchAll();

echo "bom dia";
?>