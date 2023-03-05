<?php
require_once("banco.php");
require_once("tabelas.php");

echo $_POST['nome'];
echo '<br>';
echo $_POST['idade'];
echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['telefone'];
echo '<br>';
echo $_POST['serie'];
echo '<br>';
echo $_POST['sex'];
echo '<br>';
if(isset($_POST['yoda']) && isset($_POST['figura'])){
    echo 'Yoda melhor Personagem de Star Wars';
    echo '<br>';
    echo 'Possuo Action Figures';
}elseif(isset($_POST['yoda'])){
    echo 'Yoda melhor Personagem de Star Wars';
}else{
    echo 'Possuo Action Figures';
}
echo '<br>';
echo $_POST['cor'];
echo '<br>';

$estados = select_linhas();
echo "<table border=1>\n";
foreach($estados as $estado) {
    echo "<tr>\n";
    echo "<td>" . $estado['pk_cod_estados'] . "</td>";
    echo "<td>" . $estado['nom_estados'] . "</td>";
    echo "<td><a href=\"excluir_estados.php?pk_cod_estados=" . $estado['pk_cod_estados'] . "\">Excluir</a></td>";
    echo "</tr>\n";
}	
echo "</table>\n";

?>
