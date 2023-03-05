<?php
require_once("banco.php");
require_once("tabelas.php");

$estados = select_linhas();
echo "<table border=1>\n";
foreach($estados as $estado) {
    echo "<tr>\n";
    echo "<td>" . $estado['pk_cod_estados'] . "</td>";
    echo "<td>" . $estado['nom_estados'] . "</td>";
    echo "</tr>\n";
}	
echo "</table>\n";
?>