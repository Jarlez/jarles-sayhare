<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Jarles</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>



<body>

    <div class="container" id="tamanhoContainer" style="margin-top:40px">
        <h4 style="text-align: center;">Formulário de cadastro</h4>
        <form action="_inserir_produto.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Número do produto</label>
                <input type="number" class="form-control" name="numeroproduto" id="exampleInputEmail1" placeholder="insira o número do produto" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" id="exampleInputEmail1" placeholder="insira o nome do produto" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" name="categoria" id="exampleFormControlSelect1" required>
                    <option>perifericos</option>
                    <option>hardware</option>
                    <option>software</option>
                    <option>celulares</option>

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="exampleInputEmail1" placeholder="insira a quantidade de produto(os)" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Fornecedores</label>
                <select class="form-control" name="fornecedor" id="exampleFormControlSelect1" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>

                </select>
                <br>



            </div>

            <div style="text-align:right">
                
            <a href="teste.php" class="btn btn-success">Tabela</a>

            <button type="submit" class="btn btn-success">Enviar</button>




            </div>







        </form>


    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script type="text/javascript" src="bootstrap.js/"> </script>








</body>



</html>