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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="css/Forms.css">
</head>
<body>
<?php include('contato-cabeca.php'); ?>
    

    <div class="page">
        <form   action="salvarContato.php"  method="POST" class="formLogin">
            <h1>Fale conosco:</h1>
            <table class="table table-bordered">
            <tr>
            <label for="txDesc">Nome do usuario:</label>
                <input type="text" name="txDesc" id="txDesc">
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Enviar" class="btn btn-primary"></td>
            </tr>

            <tr>
                <label for= "txNews"> Fale conosco:</label>
                <textarea name="txNews" id="txNews"></textarea>
            </tr>
        </table>
           

        </form>
    </div>
    
</body>
</html>