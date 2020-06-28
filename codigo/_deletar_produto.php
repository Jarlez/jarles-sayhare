<!DOCTYPE html>
<html>

<head>
    <title>Deletar Produto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>


    <?php



    include 'conexao.php';

    $id_estoque = $_GET['id'];


   $sql = "DELETE FROM estoque WHERE id_estoque = $id_estoque";
   $deletar = mysqli_query($conexao, $sql);

    

    ?>

        


    

    <link rel="stylesheet" href="css/bootstrap.css">
    <div class="container" style="width:500px; margin-top:20px">
        <center>
            <h4>Produto Excluido Com Sucesso!</h4>
            <center>
                <div style="padding-top: 20px">
                    <center>
                        <a href="teste.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
                        <center>
                </div>
                <script type="text/javascript" src="bootstrap.js/"> </script> 
</body>

</html>