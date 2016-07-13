<?php
class ProdutoDAO {

    function inserir(Produtos $produtos) {
        include ("Conexao.php");
        $sql = mysql_query("insert into produto (codigo,
                                                        descricao,
                                                        qtd_estoque,
                                                        valor_venda,
                                                        valor_custo,
                                                        categoria)
                                                        values ('" . $produtos->getCodigo() . "','" .
                $produtos->getDescricao() . "','" .
                $produtos->getQtdEstoque() . "','" .
                $produtos->getVenda() . "','" .
                $produtos->getCusto() . "','" .
                $produtos->getCategoria() ."')");

        switch (true) {
            case mysql_errno($db) > 0: {
                    echo "Erro: " . mysql_errno() . "-" . mysql_error($db);
                    $query = mysql_query("ROLLBACK");
                    return 1;
                    break;
                }
            case mysql_errno($db) == 0: {
                    $query = mysql_query("COMMIT");
                    return 0;
                    break;
                }
        }
        return 1;
    }

    function buscarTodos() {
        include ("Conexao.php");

        $sql = mysql_query("select * from produto order by descricao");

        switch (true) {
            case mysql_errno($db) > 0: {
                    echo "Erro: " . mysql_errno() . "-" . mysql_error($db);
                    break;
                }
            case mysql_errno($db) == 0: {
                    return $sql;
                    break;
                }
        }
        return 1;
    }

    function verificaSeExiste(Produtos $produtos) {
        include ("Conexao.php");

        echo "caiu";
        $sql = mysql_query("select count(codigo) as cod from produto where codigo =" . $produtos->getCodigo());

        switch (true) {
            case mysql_errno($db) > 0: {
                    echo "Erro: " . mysql_errno() . "-" . mysql_error($db);
                    break;
                }
            case mysql_errno($db) == 0: {
                    $consulta = mysql_fetch_array($sql);
                    return $consulta[0];
                    break;
                }
        }
    }

    function alterar(Produtos $produtos) {
        include ("Conexao.php");
        $sql = mysql_query("update produto set descricao='" . $produtos->getDescricao() . "',
                                               qtd_estoque='" . $produtos->getQtdEstoque() . "',
                                               valor_venda='" . $produtos->getVenda() . "',
                                               valor_custo='" . $produtos->getCusto() . "',
                                               categoria='" . $produtos->getCategoria() . "'  
                                               where codigo=" . $produtos->getCodigo());

        switch (true) {
            case mysql_errno($db) > 0: {
                    echo "Erro: " . mysql_errno() . "-" . mysql_error($db);
                    $query = mysql_query("ROLLBACK");
                    return 1;
                    break;
                }
            case mysql_errno($db) == 0: {
                    $query = mysql_query("COMMIT");
                    return 0;
                    break;
                }
        }
        return 1;
    }

    function excluir(Produtos $produtos) {
        include ("Conexao.php");

        $sql = mysql_query("delete from produto where codigo=" . $produtos->getCodigo());

        switch (true) {
            case mysql_errno($db) > 0: {
                    echo "Erro: " . mysql_errno() . "-" . mysql_error($db);
                    $query = mysql_query("ROLLBACK");
                    return 1;
                    break;
                }
            case mysql_errno($db) == 0: {
                    $query = mysql_query("COMMIT");
                    return 0;
                    break;
                }
        }
        return 1;
    }

}
