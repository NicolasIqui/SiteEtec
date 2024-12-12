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
    <link rel="stylesheet" type="text/css" href="css/Painel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include('cabecalho.php'); ?>
<div class="body">
<section class="container">
    <h1>Painel de noticias e novidades</h1>
    <div class="row">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/websai" class="card-img-top" alt="Informação 1">
            <div class="card-body">
                <p class="card-text text-center">    Sua opinião é importante para todos nós: Websai</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/canguru.png" class="card-img-top" alt="Informação 2">
            <div class="card-body">
                <p class="card-text text-center">    Provas Canguru Matemático</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/Techcesp.jpg" class="card-img-top" alt="Informação 3">
            <div class="card-body">
                <p class="card-text text-center">    Tecsesp: Torneio da Etec de Esportes</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/onc.jpg" class="card-img-top" alt="Informação 4">
            <div class="card-body">
                <p class="card-text text-center">    ONC: Olimpíada Nacional de Ciências</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/OBMEP" class="card-img-top" alt="Informação 1">
            <div class="card-body">
                <p class="card-text text-center">    OBMEP: Olimpíada Brasileira de Matemática das Escolas Públicas</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/palestra.png" class="card-img-top" alt="Informação 2">
            <div class="card-body">
                <p class="card-text text-center">    Palestra: Setembro Amarelo</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/mudeu.jpg" class="card-img-top" alt="Informação 3">
            <div class="card-body">
                <p class="card-text text-center">    Museu da Imigração</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img src="img/cardapio.png" class="card-img-top" alt="Informação 4">
            <div class="card-body">
                <p class="card-text text-center">    Cardápio do Mês</p>
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