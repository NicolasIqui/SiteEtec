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
    <div class="page">
        <form   action="salvarpainel.php"  method="POST" class="formLogin">
            <h1>Adicionar notícia</h1>
            <p>Adicione uma notícia da escola no painel de notícias.</p>
            <table class="table table-bordered">
            <tr>
            <label for="txDesc">Descrição:</label>
                <input type="text" name="txDesc" id="txDesc">
            </tr>
            
            <tr>
                <label for="txData">Dia:</label>
                <input type="date" name="txData2" id="txData2">
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Validar" class="btn btn-primary"></td>
            </tr>

            <tr>
                <label for= "txLocal"> Local:</label>
                <input type="text" name="txLocal" id="txLocal">
            </tr>

            <tr>
                <label for= "txNews"> Notícia:</label>
                <input type="text" name="txNews" id="txNews">
            </tr>
        </table>
           

        </form>
    </div>
    
</body>
</html>