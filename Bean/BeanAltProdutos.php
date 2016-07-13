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
        $produtos->setCodigo($_POST["codigo"]);
        $produtos->setDescricao($_POST["descricao"]);
        $produtos->setQtdEstoque($_POST["qtdestoque"]);
        $produtos->setVenda($_POST["venda"]);
        $produtos->setCusto($_POST["custo"]);
        $produtos->setCategoria($_POST["categoria"]);
        
        $dao = new ProdutoDAO();
        $retorno = $dao->alterar($produtos);

        if ($retorno == 0) {
            echo "<script>alert('Alterado Com Sucesso!!');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/ConsultaProdutos.php'>";
        } else {
            echo "<script>alert('Erro ao Alterar.');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/ConsultaProdutos.php'>";
        }
        ?>
    </body>
</html>
