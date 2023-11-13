<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;>
    </head>
    <style>
body {
    background-image: url(https://media-public.canva.com/qK8cA/MAEcXOqK8cA/1/tl.png);
    background-color: #70dbd7;
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: center;
    background-attachment: fixed;
}
input {
    margin-left: 38%;
    border-radius: 9rem;
    width:25%;
    height:1.9rem;
    background-color: rgb(255, 255, 255);
    font-family: Tahoma;
}
h2 {
    margin-left: 45% ;
    font-size: 1.0rem;
}
button {
    margin-left: 45%;
    border-radius: 10rem;
    color: black;
    background-color: rgba(0, 255, 255, 0);
    text-transform: uppercase;
    font-family: monospace;
    font-size: 1.3rem;
    letter-spacing: .15rem;
}
    </style>
    <body>
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
              <ul class="pagination" style="margin-top:3%;margin-left:32%;">
              <li class="page-item"><a class="page-link text-dark bg-info" href="index.php"><i class="fa fa-home"></i> Página inicial</a></li>
              <li class="page-item"><a class="page-link text-dark bg-info" href="sobrenos.php"><i class="fa fa-info-circle"></i> Sobre nós</a></li>
              <li class="page-item"><a class="page-link text-dark bg-info" href="login.php"><i class="fa fa-user"></i> Login</a></li>
              <li class="page-item"><a class="page-link text-dark bg-info" href="cadastre.php"><i class="fa fa-user"></i> Cadastre</a></li>
              </ul>
            </div>
        </div>
        <h1 style="font-family:garamond;font-size:65px;text-align:center;margin-top:6%;">Login</h1>
        <br>
        <br>
        <form action="valida_usuario.php" method="post">
        <input type="text" placeholder="Inserir usuário" name="usuario">
        <br>
        <br>
        <br>
        <input type="password" placeholder="Senha" name="password">
        <br>
        <br>
        <br>
        <button type="submit" class="btn btn-info" value="Login"><i class="fa fa-paper-plane"> Submit</button></i>
        </form>
        </div>
    </body>
</html>
