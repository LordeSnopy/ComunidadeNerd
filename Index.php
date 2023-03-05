<!doctype html>
<html lang="pt-br">
<head>
  <title>Trabalho PPI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  


<body class="p-3 mb-2 bg-dark text-white">    
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                COMUNIDADE DOS NERDS
                <br>
                POR FAVOR REGISTRE-SE
            </div>
            <br>
            <div class="panel-body">
                <form action="verifica.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="senha" placeholder="Senha" class="form-control">
                    </div>
                    <br>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
                <?php
                if(isset($_GET['msg'])){
                    $mensage_ext = $_GET['msg'] == 'erro_login' ? 'Login invalido' : 'Dados insuficientes';
                ?>
                <div class="panel-footer"><?php echo $mensage_ext; ?></div> 
                <?php }?>
            </div>
        </div>       
    </div>
    </body>
</html>