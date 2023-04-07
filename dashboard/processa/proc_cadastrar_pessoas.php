<?php
require_once('../../adm/conexao.php');

// preparar e executar a inserção do registro

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipo_user = $_POST['tipo_user'];
$data_nasc = $_POST['data_nasc'];

// criptografando a senha
$senha_hash = hash('sha256', $senha);

if ($nome && $cpf && $senha && $tipo_user && $data_nasc) {
    $sql = "INSERT INTO pessoas (nome,cpf,senha,tipo_user,data_nasc, created, modified) VALUES (:nome,:cpf,:senha_hash,:tipo_user,:data_nasc, NOW(), NOW())";
    $insert = $pdo->prepare($sql);
    $insert->bindValue(':nome', $nome);
    $insert->bindValue(':cpf', $cpf);
    $insert->bindValue(':senha_hash', $senha_hash);
    $insert->bindValue(':tipo_user', $tipo_user);
    $insert->bindValue(':data_nasc', $data_nasc);
    $insert->execute();

    header("Location: ../index_dash_apagar.php");
} else {
    header("Location: ../cadastrar_apagar.php");
}
