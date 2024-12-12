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
        <form   action="admVerificarLogin.php"  method="POST" class="formLogin">
            <h1>Login como administrador</h1>
            <p>Logue em sua conta de administrador pra ter acesso a páginas restritas.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true"   name="txEmailAdm" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha"  name="txSenhaAdm" />
          <input  type="submit" value="Entrar como administrador" class="btn"    />
          <a href="index2.php"><p>voltar a página principal<p><a>
        </form>
    </div>
    
</body>
</html> 