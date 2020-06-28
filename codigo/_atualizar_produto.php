<?php

include 'conexao.php';


$id_estoque = $_POST['id_estoque']; 
$numeroproduto = $_POST['numeroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$categoria = $_POST['categoria'];


$sql = "UPDATE estoque SET numeroproduto=$numeroproduto,nomeproduto=$nomeproduto,categoria=$categoria,quantidade=$quantidade,fornecedor=$fornecedor WHERE id_estoque= $id_estoque";

$atualizar= mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="index.css">



<center>
  <h4 style="padding-top: 20;">Produto Atualizado Com Sucesso!</h4>
  <center>
    <div style="padding-top: 20px">
      <center>
        <a href="teste.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        <center>
    </div>