<?php

include 'conexao.php';




?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Jarles</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">


</head>



<body>

    <div class="container" id="tamanhoContainer" style="margin-top:40px">
        <h4 style="text-align: center;">Atualização do Formulário de Cadastro</h4>
        <form action="_atualizar_produto.php" method="POST">
            <?php
            $id_estoque = $_GET['id'];

            $sql = "SELECT id_estoque, numeroproduto, nomeproduto, categoria, quantidade, fornecedor FROM estoque WHERE  id_estoque = $id_estoque";
            $result = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id_estoque = $row['id_estoque'];
                    $numeroproduto = $row['numeroproduto'];
                    $nomeproduto = $row['nomeproduto'];
                    $categoria = $row['categoria'];
                    $quantidade = $row['quantidade'];
                    $fornecedor = $row['fornecedor'];
                }
            ?>

                <div class="form-group">

                    <label for="exampleInputEmail">ID no Banco</label>
                    <input type="text" class="form-control" name="id_estoque" value="<?php echo $id_estoque ?>">

                    <label for="exampleInputEmail1">Número do produto</label>
                    <input type="number" class="form-control" name="numeroproduto" value="<?php echo $numeroproduto ?>">




                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                        <option>Perifericos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Fornecedores</label>
                    <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>

                    </select>
                    <br>



                </div>

                <div style="text-align:right">

                    <button type="submit" class="btn btn-success">Atualizar</button>

                </div>


            <?php   }       ?>
        </form>




    </div>



    <script type="text/javascript" src="bootstrap.js/"> </script>








</body>



</html>