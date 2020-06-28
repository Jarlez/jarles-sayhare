<?php

include 'conexao.php';


$numeroproduto = $_POST['numeroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$categoria = $_POST['categoria'];



if (!$conexao) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `estoque`( `numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$numeroproduto','$nomeproduto','$categoria','$quantidade','$fornecedor')";

if (mysqli_query($conexao, $sql)) {
   "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conexao);










?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width:500px; margin-top:20px">
    <center>
        <h4>Produto Adicionado Com Sucesso!</h4>
        <center>
            <div style="padding-top: 20px">
                <center>
                    <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
                    <center>
            </div>