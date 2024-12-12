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
    <h1>Bem-vindo à Etec Guaianazes</h1>
    <div class="row">  
            <!-- CARDS Em Cima -->
            <!-- CARD 1 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="img/laboratorio.jpg" class="card-img-top" alt="Informação 1">
                <div class="card-body">
                    <p class="card-text">Laboratório de Computadores</p>
                </div>
            </div>
        </div>
            <!-- CARD 2 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="img/labarotorionutri.jpeg" class="card-img-top" alt="Informação 2">
                <div class="card-body">
                    <p class="card-text">Laboratório de Culinária</p>
                </div>
            </div>
        </div>
            <!-- CARD 3 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="Img/quadra.jpg" class="card-img-top" alt="Informação 3">
                <div class="card-body">
                    <p class="card-text">Quadra Poliesportiva</p>
                </div>
            </div>
        </div>
            <!-- CARD 4 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="Img/sala.jpg" class="card-img-top" alt="Informação 4">
                <div class="card-body">
                    <p class="card-text">Salas de Aula</p>
                </div>
            </div>
        </div>
    </div>
            <!-- CARDS Em Baixo-->
            <!-- CARD 5 -->
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="img/Entrada.jpg" class="card-img-top" alt="Informação 5">
                <div class="card-body">
                    <p class="card-text">Portão de Entrada</p>
                </div>
            </div>
        </div>
            <!-- CARD 6 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="img/Anfiteatro.jpeg" class="card-img-top" alt="Informação 6">
                <div class="card-body">
                    <p class="card-text">Anfiteatro Etec de Guaianazes</p>
                </div>
            </div>
        </div>
            <!-- CARD 7 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="Img/Biblioteca.png" class="card-img-top" alt="Informação 7">
                <div class="card-body">
                    <p class="card-text">Biblioteca Etec de Guaianazes</p>
                </div>
            </div>
        </div>
            <!-- CARD 8 -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="img/refeitorio.jpg" class="card-img-top" alt="Informação 8">
                <div class="card-body">
                    <p class="card-text">Refeitório Etec de Guaianazes</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-school">
        <br><h5>Consultar Cursos Disponiveis:</h5><a href="consultarCursos.php">Consultar Cursos aqui! </a></p></br>
        

        <p>R. Feliciano de Mendonça, 290 - Guaianases, São Paulo - SP, 08460-365
            Telefone: (11) 2551-9484 </p>
    </div>

</section>
<?php include('rodape.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>