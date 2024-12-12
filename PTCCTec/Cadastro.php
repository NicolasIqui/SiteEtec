<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/Forms.css">
</head>
<body>
    <div class="page">
        <form   action="salvarLogin.php"  method="POST" class="formLogin">
            <h1>Cadastro de usuário</h1>
            <p>Crie sua conta com os seguintes dados abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true"   name="txEmail" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha"  name="txSenha" />
            <input  type="submit" value="Cadastrar" class="btn"    />
        </form>
        <br>
        <form action="Index.php" class="formLogin">
            <h3> Já tem uma conta? </h3>
            <input  type="submit" value="Log-in" class="btn"    />
    </form>
    </div>
    
</body>
</html> 