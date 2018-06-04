<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/css/stylelogin.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="loginBox">
    <img class="user" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120">
    <h3> Entrar </h3>

        <form method="post" action="?acao=login">
            <div class="inputBox">
                <input type="email" name="email" placeholder="email">
                <span><i class="fa fa-user"  aria-hidden="true" ></i></span>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" placeholder="senha">
                <span><i class="fa fa-lock"  aria-hidden="true" ></i></span>
            </div>
            <?php
            if (@$_GET['erro'] == 1){?>
                <div class="error-text" style="color: red">Login incorreto. Por favor tente novamente</div>
            <?php } ?>
            <input type="submit" name="gravar" value="Login">
        </form>

<a href="cadastrar.php">Deseja criar uma conta?</a>
        <br>
<a href="cadastrar.php">Esqueceu a senha</a>
</div>
</body>
</html>




