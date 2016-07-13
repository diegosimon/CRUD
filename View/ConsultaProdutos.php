<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CRUD - Consultar Produtos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="pt-br">
        <link rel="icon" href="../Css/imagens/icone.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="../Css/imagens/icone.ico" type="image/x-icon" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
        <script src="../Css/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../Css/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
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
            $(document).ready(function () {
                $('#example').dataTable({
                    "language": {
                        "search": "Buscar:",
                        "emptyTable": "Sem dados disponíveis na tabela",
                        "lengthMenu": "Qtd Registros _MENU_ ",
                        "zeroRecords": "Nenhum registro correspondente encontrado",
                        "info": "Exibindo _START_ a _END_ de _TOTAL_ registros",
                        "infoEmpty": "Exibindo 0 a 0 de 0 registros",
                        "infoFiltered": "(Total de registros _MAX_ filtrados)",
                        "loadingRecords": "Carregando...",
                        "processing": "Processsando...",
                        "paginate": {
                            "previous": "Anterior",
                            "next": "Próximo"
                        }
                    }
                });
            });

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
                    <h4><small>Consultas/</small></h4>
                    <hr>
                    <h2>Produtos</h2>
                    <div class="intro-widget">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Descrição</th>
                                        <th>Qtd Estoque</th>
                                        <th>Categoria</th>
                                        <th>Custo</th>
                                        <th>Venda</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once ("../Dao/ProdutoDAO.php");
                                    $dao = new ProdutoDAO();
                                    $retorno = $dao->buscarTodos();
                                    while ($exibe = mysql_fetch_object($retorno)) {
                                        echo '<tr>
                                    <td>' . $exibe->codigo . '</td>
                                    <td>' . $exibe->descricao . '</td>
                                    <td>' . $exibe->qtd_estoque . '</td>
                                    <td>' . $exibe->categoria . '</td>
                                    <td>R$' . number_format($exibe->valor_custo,2,",",".") . '</td>    
                                    <td>R$' . number_format($exibe->valor_venda,2,",",".") . '</td>';
                                        echo ("<form action='../View/AlterarProdutos.php' method='POST' id='formulario'>");
                                        echo ("<input type='hidden' name='codigo' value='$exibe->codigo'/>");
                                        echo ("<input type='hidden' name='descricao' value='$exibe->descricao'/>");
                                        echo ("<input type='hidden' name='qtd_estoque' value='$exibe->qtd_estoque'/>");
                                        echo ("<input type='hidden' name='categoria' value='$exibe->categoria'/>");
                                        echo ("<input type='hidden' name='valor_custo' value='$exibe->valor_custo'/>");
                                        echo ("<input type='hidden' name='valor_venda' value='$exibe->valor_venda'/>");
                                        echo "<td><button class='btn btn-success'>Alterar</button></td>";
                                        echo ("</form>");
                                        echo ("<form action='../Bean/BeanExcProdutos.php' method='POST' id='formulario'>");
                                        echo ("<input type='hidden' name='codigo' value='$exibe->codigo'/>");
                                        echo "<td><button class='btn btn-danger'>Excluir</button></td>";
                                        echo ("</form></tr>");
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- //.intro-widget -->
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <p>CRUD De Produtos - Desenvolvedor Diego Simon</p>
        </footer>
    </body>
</html>