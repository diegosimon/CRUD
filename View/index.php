<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Home - Bem Vindo ao CRUD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="pt-br">
        <link rel="icon" href="../Css/imagens/icone.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="../Css/imagens/icone.ico" type="image/x-icon" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .row.content {height: 583px}
            .sidenav {
                background-color: #f1f1f1;
                height: 100%;
            }
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height: auto;}
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <h4>Bem Vindo ao CRUD</h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="CadastroProdutos.php">Cadastros</a></li>
                        <li><a href="ConsultaProdutos.php">Consultas</a></li>
                    </ul><br>
                </div>
                <div class="col-sm-9">
                    <h4><small>Home / Bem Vindo </small></h4>
                    <hr>
                    <h2>Utilize o Menu ao lado para navegar :)</h2>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <p>CRUD De Produtos - Desenvolvedor Diego Simon</p>
        </footer>
    </body>
</html>