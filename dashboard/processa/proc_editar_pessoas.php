<?php
require_once('../../adm/conexao.php');

// preparar e executar a inserção do registro

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipo_user = $_POST['tipo_user'];
$data_nasc = $_POST['data_nasc'];

// criptografando a senha
$senha_hash = hash('sha256', $senha);

if ($nome && $cpf && $senha && $tipo_user && $data_nasc) {
    $sql = "UPDATE pessoas
        SET nome = :nome,
            cpf = :cpf,
            senha = :senha_hash,
            tipo_user = :tipo_user,
            data_nasc = :data_nasc,
            modified = now()
        WHERE id = :id";
    $update = $pdo->prepare($sql);
    $update->bindValue(':id', $id);
    $update->bindValue(':nome', $nome);
    $update->bindValue(':cpf', $cpf);
    $update->bindValue(':senha_hash', $senha_hash);
    $update->bindValue(':tipo_user', $tipo_user);
    $update->bindValue(':data_nasc', $data_nasc);
    $update->execute();

    header("Location: ../index_dash.php");
} else {
    header("Location: ../editar_pessoas.php");
}
