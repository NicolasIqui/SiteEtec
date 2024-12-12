<?php
session_start();

//verificar se estar logado
if(!isset($_SESSION["logado"])){
    if(!isset($_SESSION["logadoAdm"])){
        unset($_SESSION["logado"]);
        unset($_SESSION["logado2"]);
    header("Location:Index.php");
    }
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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/Noticia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>

  <body>
    <div class=body>
      <?php include('cabecalho.php'); ?>

      <div class="container my-4">
            <h2 class="text-center text-light mb-4">Lista de Noticias</h2>
            <table class="table table-striped table-hover table-bordered table-dark">
                <thead class="thead-light">
 
         <div  class=mestre>

         <?php
$stmt = $pdo->prepare("SELECT * FROM tbNoticia");
$stmt->execute();
$count = 0;  // Contador para limitar a cada 4 notícias
echo '<div class="mestre">';  // Abrir o primeiro "warp"
while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
    if ($count > 0 && $count % 4 == 0) {
        echo '</div><div class="mestre">';  // Fechar a div anterior e abrir uma nova
    }
    ?>
    <div class="titulo">
        <?php echo $row[1]; ?>  <!-- Exibe o título -->
        <div class="imagem"> 
            <img src="<?php echo $row[5]; ?>" alt="" height="100%" width="35%">  
        </div>
        <?php echo $row[4]; ?><br>
        <?php echo $row[3]; ?><br>
        <?php echo $row[2]; ?><br>
    </div>
    <?php
    $count++;  // Incrementa o contador
}
echo '</div>';  // Fechar o último "warp"
?>
     
        </div>

    </div>
  </body>

  </html>