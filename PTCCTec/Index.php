<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Forms.css">
</head>
<body>
    <div class="page">
        <form   action="verificarLogin.php"  method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true"   name="txGetEmail" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha"  name="txGetSenha" />
           <div class="check">
           
            </div>
         <input  type="submit" value="Entrar" class="btn"    />
        </form>
        <br>
        <form action="Cadastro.php" class="formLogin">
        <h3>Não tem uma conta?</h3>
        <input  type="submit" value="Cadastrar" class="btn"    />
</form>
    </div>
    
</body>
</html> 