<?php
include "conn.php";

$sql = "INSERT INTO tab_venda(vltotal, status) VALUES ('50','1')";
mysqli_query($conn,$sql);

$sql= "SELECT id FROM tab_venda";
$res = mysqli_query($conn,$sql);
$linha = mysqli_fetch_assoc($res);
$id = $linha["id"];


$nome = $_GET["nome"];
$valor = $_GET["valor"];
$quant = $_GET["quant"];

$sql = "INSERT INTO tab_pedido(quantidade,VLTotal,produto,id_venda) VALUES('$quant','$valor','$nome','$id')";

if(mysqli_query($conn, $sql)){
    echo "ok";
}else{
    echo "erro";
}