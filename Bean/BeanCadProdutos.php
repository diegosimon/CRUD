<?php session_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <title></title>
    </head>
    <body>
        <?php
        require_once("../dao/ProdutoDAO.php");
        require_once("../model/Produtos.php");

        $produtos = new Produtos();
        $dao = new ProdutoDAO();
        $produtos->setCodigo($_POST["codigo"]);
        $existe = $dao->verificaSeExiste($produtos);
        if($existe > 0){
            echo "<script>alert('Código de Produto Já Cadastrado!');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/CadastroProdutos.php'>";
            die();
        }
        $produtos->setDescricao($_POST["descricao"]);
        $produtos->setQtdEstoque($_POST["qtdestoque"]);
        $produtos->setVenda($_POST["venda"]);
        $produtos->setCusto($_POST["custo"]);
        $produtos->setCategoria($_POST["categoria"]);
        
        $retorno = $dao->inserir($produtos);

        if ($retorno == 0) {
            echo "<script>alert('Cadastrado Com Sucesso!!');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/CadastroProdutos.php'>";
        } else {
            echo "<script>alert('Erro ao Cadastrar.');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/CadastroProdutos.php'>";
        }
        ?>
    </body>
</html>
