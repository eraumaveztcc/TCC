<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../assets/css/stylecadastro.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="loginBox">
    <img class="user">
    <h3> Cadastrar </h3>
    <form method="post" action="?acao=cadastrar">
        <div class="inputBox">
            <input type="text" name="nome" placeholder="Usuario">
            <span><i class="fa fa-user"  aria-hidden="true" ></i></span>
        </div>
        <div class="inputBox">
            <input type="email" name="email" placeholder="E-mail">
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
        </div>
        <div class="inputBox">
            <input type="password" name="senha" placeholder="Senha">
            <span><i class="fa fa-lock"  aria-hidden="true" ></i></span>
        </div>
        <div class="inputBox">
            <input type="password" name="senha1" placeholder="Confirmar senha">
            <span><i class="fa fa-check-circle" aria-hidden="true"></i></span>
        </div>
        <div class="inputBox">
            Digite sua data de nascimento:
            <input type="date" name="datanascimento" placeholder="Data de nascimento" min="1915-01-01" max="2018-01-28">
        </div>

        <div class="inputBox">
            <input type="radio" name="sexo" value="M"><i>Masculino</i>
            <input type="radio" name="sexo" value="F"><i>Feminino</i>
        </div>
                <input type="submit" name="gravar" value="Cadastrar">
    </form>
    <a href="?acao=login">Já tem uma conta?Entre aqui</a>
</div>
</body>
</html>
