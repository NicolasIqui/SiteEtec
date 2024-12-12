<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/Consultar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <?php include('cabecalho.php'); ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->prepare("SELECT * FROM tbNoticia");
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                ?>
                    <tr>
                        <td>
                            <?php if (!empty($row[5])): ?>
                                <?php
                                $imagePath = htmlspecialchars($row[5], ENT_QUOTES, 'UTF-8');
                                // Para depuração, verifique o caminho da imagem
                                echo "<p>Caminho da Imagem: $imagePath</p>";
                                ?>
                                <img src="<?php echo $imagePath; ?>" alt="foto" style="width: 100px; height: auto;">
                            <?php else: ?>
                                Sem imagem
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

        <img src="IMG_20201013_131016.jpg" alt="foto" style="width: 100px; height: auto;">

</body>

</html>
