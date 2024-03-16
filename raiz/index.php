
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include_once 'cabecalho.php'; ?>
        <link rel="stylesheet" type="text/css" href="signin.css" >
        <link rel="icon" href="../img/pilha.png" type="image/png">
    </head>
    <body style="background-color:#D6F1F2;">
       
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <?php
                    $pagina = filter_input(INPUT_GET, 'p');

                    if (isset($pagina) || !empty($pagina)) {
                        include_once $pagina . '.php';
                    } else {
                        include_once 'home.php';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include_once 'plugins.php'; ?>
    </body>
</html>