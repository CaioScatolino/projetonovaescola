<?php

if(isset($_POST['acao'])) {

// importando arquivo conexão

    require_once "adm/conexao.php"; 

// obtendo valores digitados no form

    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    $senha_hash = hash('sha256', $senha);

// verificar se existe no banco de dados

    $sql = "SELECT * FROM pessoas WHERE pessoas.cpf = :login and pessoas.senha = :senha_hash";
    $comando = $pdo -> prepare($sql);

    $comando -> bindParam(':login', $usuario);
    $comando -> bindParam(':senha_hash', $senha_hash);
    $comando -> execute();

    if($comando -> rowCount() === 1) {
        echo "Existe um usuário em nossa base de dados.";
        echo $usuario."<br>";
        echo $senha."<br>";
        echo $senha_hash."<br>";
    } else {
        echo "Não existe um usuário em nossa base de dados.";
        echo $usuario . "<br>";
        echo $senha . "<br>";
        echo $senha_hash . "<br>";
    };


}else {
    echo 'Erro... Acesso indevido!';
}
