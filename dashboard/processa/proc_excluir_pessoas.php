<?php
require_once('../../adm/conexao.php');



$id = $_GET['id'];


if ($id) {
    $sql = "UPDATE pessoas SET `status` = 0 WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindValue(':id', $id);
    $comando->execute();

    if($comando) {
        echo "<script> alert('Registro Desativado com Sucesso!); window.location.href'../index_dash.php'; </script>";
        header("Location: ../index_dash.php");
    } else {
        echo "<script> alert('Erro ao Desativar registro!); window.location.href'../index_dash.php'; </script>";
    }

};
