<?php
header('Content-Type: application/json');
include "conn.php";
$valor = $_GET["valor"];
$sql = "";

if ($valor == "0") {
    $sql = "SELECT * FROM tab_produtos";
    $res = mysqli_query($conn, $sql);
    $resposta = mysqli_fetch_all($res);
    echo json_encode($resposta);}
if ($valor == "1") {
    $sql = "SELECT * FROM tab_produtos WHERE id_categoria = '1'";
    $res = mysqli_query($conn, $sql);
    $resposta = mysqli_fetch_all($res);
    echo json_encode($resposta);
} if ($valor == "2") {
    $sql = "SELECT * FROM tab_produtos WHERE id_categoria = '2'";
    $res = mysqli_query($conn, $sql);
    $resposta = mysqli_fetch_all($res);
    echo json_encode($resposta);
}
 if ($valor == "3") {
    $sql = "SELECT * FROM tab_produtos WHERE id_categoria = '3'";
    $res = mysqli_query($conn, $sql);
    $resposta = mysqli_fetch_all($res);
    echo json_encode($resposta);
}
if ($valor == "4") {
    $sql = "SELECT * FROM tab_produtos WHERE id_categoria = '4'";
    $res = mysqli_query($conn, $sql);
    $resposta = mysqli_fetch_all($res);
    echo json_encode($resposta);
}