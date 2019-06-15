<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/teleLogin.css">
    </head>
    <body>
        <main>
            <h1>Portal Fixar</h1>
            <div id="total">
                <form action="php/login.php" method="Post">
                    <label for="login" class="texto">Usuário</label>
                    <input type="text" name="login" id="login" class="campo" required/><br>
                    <label for="senha" class="texto">Senha</label>
                    <input type="password" name="senha" id="senha" class="campo" required/><br><br>
                    <input type="submit" value="ENTRAR" id="botaoLogin" />
                </form>
            </div>
            <a href="paginas/cadastro.html">Cadastro de Usuário</a>
        </main>
    </body>
</html>