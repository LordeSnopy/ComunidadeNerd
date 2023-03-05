<?php
require_once("banco.php");
require_once("tabelas.php");

$id = $_GET['pk_cod_estados'];
excluir_estado($id);

header("Location: resultado.php");
?>
