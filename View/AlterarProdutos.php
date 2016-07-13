<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CRUD - Alterar Produtos</title>
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
        <script type="text/javascript">
            function validarDados() {
                var descricao = document.getElementById("descricao").value;
                if (descricao == "") {
                    alert("Descrição deve ser informado.");
                    return;
                }
                var codigo = document.getElementById("codigo").value;
                if (codigo == "") {
                    alert("Código deve ser informado.");
                    return;
                }
                var qtdestoque = document.getElementById("qtdestoque").value;
                if (qtdestoque == "") {
                    alert("Quantidade em Estoque deve ser informado.");
                    return;
                }
                var custo = document.getElementById("custo").value;
                if (custo == "") {
                    alert("Valor de Custo deve ser informado.");
                    return;
                }
                var venda = document.getElementById("venda").value;
                if (venda == "") {
                    alert("Valor de Venda deve ser informado.");
                    return;
                }
                var categoria = document.getElementById("categoria");
                if (categoria.options[categoria.selectedIndex].value == "0") {
                    alert("Selecione uma Categoria Antes de Continuar");
                    return;
                }
                document.forms['formulario'].submit();
            }
            function mascaraPontoFlut(valor) {
                var valorV = valor.value;
                valorV = valorV.replace(',', '.');

                valor.value = valorV;
            }
            function numeros(campo) {
                if (isNaN(campo.value))
                    campo.value = campo.value.substr(0, campo.value.length - 1);
            }
        </script>
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
                    <h4><small>Cadastros/</small></h4>
                    <hr>
                    <h2>Produtos</h2>
                    <form action="../Bean/BeanAltProdutos.php" method="POST" id="formulario" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Código:</label>
                                        <input name="codigo" id="codigo" type="text" readonly="false" class="form-control" value="<?php echo $_POST['codigo']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantidade em Estoque:</label>
                                        <input name="qtdestoque" id="qtdestoque" type="text" onkeyup="numeros(this);" class="form-control" value="<?php echo $_POST['qtd_estoque']; ?>">
                                    </div>                            
                                    <div class="form-group">
                                        <label>Preço de Custo:</label>
                                        <input name="custo" id="custo" type="text" onkeyup="numeros(this);" maxlength="9" class="form-control" value="<?php echo number_format($_POST['valor_custo'],2); ?>">
                                    </div>
                                </div><!-- /.End Colum Esquerda -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Descricão:</label>
                                        <input name="descricao" id="descricao" type="text" class="form-control" value="<?php echo $_POST['descricao']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Categoria:</label>
                                        <select id="categoria" name="categoria" class="form-control select2" style="width: 100%;">
                                            <option value='Informática'<?php if ($_POST['categoria'] == "Informática") echo "selected"; ?>>Informática</option>
                                            <option value='Acessórios' <?php if ($_POST['categoria'] == "Acessórios") echo "selected"; ?>>Acessórios</option>
                                            <option value='Equipamentos' <?php if ($_POST['categoria'] == "Equipamentos") echo "selected"; ?>>Equipamentos</option>
                                        </select>
                                    </div><!-- /.form-group -->                            
                                    <div class="form-group">
                                        <label>Preço Venda:</label>
                                        <input name="venda" id="venda" type="text" onkeyup="numeros(this);" class="form-control" value="<?php echo number_format($_POST['valor_venda'],2); ?>">
                                    </div>
                                </div><!-- /.end Colum Direita-->
                            </div><!-- /.row -->
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-danger"> Limpar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" onclick="validarDados();" value="Alterar" class="btn btn-success"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <p>CRUD De Produtos - Desenvolvedor Diego Simon</p>
        </footer>
    </body>
</html>