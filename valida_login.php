<?php

if(isset($_POST['acao'])) {

// importando arquivo conexão

    require_once "adm/conexao.php"; 

// obtendo valores digitados no form

    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];

// verificar se existe no banco de dados

    $sql = "SELECT * FROM pessoas WHERE pessoas.cpf = :login and pessoas.senha = :senha";
    $comando = $pdo -> prepare($sql);

    $comando -> bindParam(':login', $usuario);
    $comando -> bindParam(':senha', $senha);
    $comando -> execute();

    if($comando -> rowCount() === 1) {
        echo "Existe um usuário em nossa base de dados.";
        echo $usuario;
    } else {
        echo "Não existe um usuário em nossa base de dados.";
    };


}else {
    echo 'Erro... Acesso indevido!';
}
?>
