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
        <form action="AlteracaoNoticia.php" method="post">      
            <div>
            <th> <input type="hidden" name="txid" value="<?php echo @$_GET['id']; ?>" /></th>
            </div>		

            <div>
            <th> <input type="text" name="txDesc" value="<?php echo @$_GET['Assunto']; ?>" placeholder="Assunto" /></th>
            </div>

            <div>
            <th>   <input type="date" name="txData2" value="<?php echo @$_GET['data']; ?>" placeholder="Data" /></th>
            </div>

            <div>
            <th> <input type="text" name="txlocal" value="<?php echo @$_GET['local']; ?>" placeholder="Local" /></th>
            </div>

            <div>
            <th> <input type="text" name="txNews" value="<?php echo @$_GET['mensagem']; ?>" placeholder="Mensagem" /></th>
            </div>

            <div>
            <th> <input type="submit" value="Alterar" /></th>
            </div>
        </form>

    </section>

    <section>
    </tr>
  </thead>
  <tbody>
</body>
</html>