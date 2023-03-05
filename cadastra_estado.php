<?php
require_once("banco.php");
require_once("tabelas.php");

$pk_cod_estado = $_POST['pk_cod_estado'];
$nom_estado = $_POST['nom_estado'];

insert_estado($pk_cod_estado,$nom_estado);

?>