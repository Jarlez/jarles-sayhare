<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="container" style="margin-top: 40px;">

        <h3 style="text-align: center;">Lista de Produtos</h3>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Número produto</th>
                    <th scope="col">Nome produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>


            <?php



            include 'conexao.php';


            $sql = "SELECT * FROM estoque";
            $result = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id_estoque = $row['id_estoque'];
                    $numeroproduto = $row['numeroproduto'];
                    $nomeproduto = $row['nomeproduto'];
                    $categoria = $row['categoria'];
                    $quantidade = $row['quantidade'];
                    $fornecedor = $row['fornecedor'];
            ?>
                    <tr>
                        <td><?php echo $numeroproduto  ?></td>
                        <td><?php echo $nomeproduto  ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $quantidade  ?></td>
                        <td><?php echo $fornecedor ?></td>
                        <td><a class="btn btn-primary btn-sm" href="editar_produto.php?id=<?php echo $id_estoque= $row['id_estoque'] ?>" role="button">Editar</a></td>
                        <td><a class="btn btn-danger btn-sm" href="_deletar_produto.php?id=<?php echo $id_estoque = $row['id_estoque'] ?>" role="button">Excluir</a></td>
                        <td><a style="float: right; margin-right: 100px; margin-bottom: 10px" class="btn btn-primary btn-sm"
                        href="index.php" role="button">Cadastrar</a></td>




                    <?php   }
                mysqli_close($conexao);   ?>

                    </tr>

                <?php } ?>
        </table>


    </div>


    <script type="text/javascript" src="bootstrap.js/"> </script>

</body>

</html>