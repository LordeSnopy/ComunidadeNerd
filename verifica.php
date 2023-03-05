<?php
require_once "banco.php";
require_once "tabelas.php";
$val = select_linhas();
$estados = select_linhas();
foreach ($estados as $estado) {
    echo $estado;
}
var_dump($val);
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'Cleber' && $senha == '123456') {
        echo 'Bem vindo a nossa pesquisa';
    } else {
        header("location:index.php?msg=erro_login");
    }
} else {
    header("location:index.php?msg=erro_dados");
}
  
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Form</title>
</head>

<body class="p-3 mb-2 bg-dark text-white">
    <?php
    $estados = select_linhas();
    foreach ($estados as $estado) {
        echo $estado;
    }
    ?>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading text-left">
                <form action="resultado.php" method="POST">
                    Nome:
                    <input type="text" name="nome">
                    <br>
                    Idade:
                    <input type="text" name="idade">
                    <br>
                    E-mail para contato:
                    <input type="email" name="email">
                    <br>
                    <label for="phone">Numero de telefone:</label><br>
                    <input type="tel" name="telefone" placeholder="9-00000000" pattern="[0-9]{1}-[0-9]{8}" required>
                    <br>
                    Serie Favorita:
                    <input type="text" name="serie">
                    <br>
                    Sexo
                    <br>
                    <input type="radio" name="sex" value="masculino"> Masculino
                    <br>
                    <input type="radio" name="sex" value="feminino">Feminino
                    <br>
                    <input type="radio" name="sex" value="prefiro não dizer">Prefiro Não Dizer
                    <br>
                    Se quiser, Marque alguma caixa Abaixo
                    <br>
                    <input type="checkbox" name="yoda">
                    Yoda melhor personagem de Star Wars
                    <br>
                    <input type="checkbox" name="figura">
                    Possuo Action Figures
                    <br>
                    Cor Favorita
                    <input type="color" name="cor">
                    <br>
                    <label for="estado">Estado</label>
                    <select name="estado">
                    <?php
                    $linhas = select_linhas();
                    foreach ($linhas as $linha) {
                        $id = $linha[0];
                        $nome = $linha[1];
                        ?>
                            <option value="<?php echo $id ?>"> <?php echo $nome; ?> </option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Enviar" id="Botão">
            </div>

        </div>

    </div>

</body>

</html>