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
        
        $dao = new ProdutoDAO();
        $retorno = $dao->excluir($produtos);

        if ($retorno == 0) {
            echo "<script>alert('Excluido Com Sucesso!!');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/ConsultaProdutos.php'>";
        } else {
            echo "<script>alert('Erro ao Excluir.');</script>";
            echo "<meta http-equiv='refresh' content='1;url=../View/ConsultaProdutos.php'>";
        }
        ?>
    </body>
</html>
