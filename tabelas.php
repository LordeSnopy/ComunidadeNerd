<?php
require_once "banco.php";
function select_linhas() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM estados");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_movel($pk_cod_estado, $nom_estado) {
	global $conn;
	$sth = $conn->prepare("insert into moveis (nom_estados) values ('$nom_estado')");
	$sth->execute();
}
?>
