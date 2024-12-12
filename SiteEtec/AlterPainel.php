<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Contatos</title>
    <link rel="stylesheet" type="text/css" href="css/Consultar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="body">
        <?php include('cabecalho.php'); ?>
        
        <div class="container my-4">
            <h2 class="text-center text-light mb-4">Altere os dados Incorretos</h2>
            <table class="table table-striped table-hover table-bordered table-dark">
                <thead class="thead-light">
                    <tr>

    <section>
        <form action="AlteracaoPainel.php" method="post">      
            <div>
            <th> <input type="hidden" name="txidPainel" value="<?php echo @$_GET['id']; ?>" /></th>
            </div>		

            <div>
            <th>  <input type="text" name="txdescPainel" value="<?php echo @$_GET['descricao']; ?>" placeholder="Assunto" /></th>
            </div>

            <div>
            <th>  <input type="text" name="txlocalPainel" value="<?php echo @$_GET['localPainel']; ?>" placeholder="Data" /></th>
            </div>
                
            <div>
            <th>  <input type="text" name="txTamanho" value="<?php echo @$_GET['tamanho']; ?>" placeholder="Data" /></th>
            </div>

            <div>
            <th> <input type="submit" value="Salvar" /></th>
            </div>
        </form>

    </section>

    <section>
    </tr>
  </thead>
  <tbody>
</body>
</html>