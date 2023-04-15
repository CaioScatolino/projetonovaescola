<?php
require_once('../../adm/conexao.php');



$id = $_GET['id'];


if ($id) {
    $sql = "DELETE FROM pessoas WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindValue(':id', $id);
    $comando->execute();

    if($comando) {
        echo "<script> alert('Registro Excluído com Sucesso!); window.location.href'../index.dash.php'; </script>";
    } else {
        echo "<script> alert('Erro ao excluir registro!); window.location.href'../index.dash.php'; </script>";
    }

};
