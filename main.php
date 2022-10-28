<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <h1>Bem vindo à area main, <?php echo $_SESSION['email'];?></h1>

    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor coloque as informação necessárias: /p>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label>Nome livro</label>
                <input type="text" name="nomeMusica" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Norme do livro</label>
                <input type="text" name="CantorBanda" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <a href="decisao.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>    
</body>
</html>
    <p>
        <a href="logout.php">Logout</a>
    </p>
</body>
</html>