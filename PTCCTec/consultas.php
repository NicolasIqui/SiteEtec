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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/Index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include('cabecalho.php'); ?>
<div class="body">
<section class="container">
    <h1>Consultar links</h1>
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <center>
                    <h3><p class="card-text">Consultar noticia </p></h3>
                    <a href="consultarNoticia.php"> consultar</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                <center>
                    <p class="card-text">Consultar login</p>
                    <a href="consultarLogin.php"> consultar</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Quadra Etec de Guaianazes</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Salas Etec de Guaianazes</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Entrada Etec de Guaianazes</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Anfiteatro Etec de Guaianazes</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Biblioteca Etec de Guaianazes</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                
                <div class="card-body">
                    <p class="card-text">Refeitorio Etec de Guaianazes</p>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('rodape.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>