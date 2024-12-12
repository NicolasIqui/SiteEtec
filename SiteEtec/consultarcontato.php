<?php
session_start();

//verificar se estar logado
if(!isset($_SESSION["logado2"])){
    unset($_SESSION["logado2"]);

    header("Location:admLogin.php");
}

    //logout
if(isset($_GET["logout"])) {
    unset($_SESSION["logado"]);
    unset($_SESSION["logado2"]);
    session_destroy();
    header("Location:Index.php");
}?>

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
            <h2 class="text-center text-light mb-4">Lista de Contatos</h2>
            <table class="table table-striped table-hover table-bordered table-dark">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome do Usuário</th>
                        <th scope="col">Mensagem</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt= $pdo->prepare("SELECT * FROM tbContato");
                    $stmt->execute();

                    while($row= $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row[0]; ?></th>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td>
                                <a href="excluirContato.php?id=<?php echo $row[0]; ?>">Excluir</a>
                            </td>
                            <td>
                                <a href="AlterContato.php   <?php echo "?id=$row[0]&nomeUsuario=$row[1]&mensagemUsuario=$row[2]"; ?> ">Alterar </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>