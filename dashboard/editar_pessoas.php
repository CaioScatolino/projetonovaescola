<?php
require_once("view/topo.php");
require_once("view/lateral.php");
require_once("../adm/conexao.php");

if ($_GET['id']) {
    $sql = "SELECT * FROM pessoas WHERE id = :id";
    $comando = $pdo->prepare($sql);
    $comando->bindValue(':id', $_GET['id']);
    $comando->execute();
    $pessoas = $comando->fetch();
} else {
    header("Location: index_dash.php");
}

?>

<main class=" col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <form method="post" action="processa/proc_editar_pessoas.php">
            <label for="nome">Nome: </label><br>
            <input class="form-control" type="text" name="nome" value="<?= $pessoas['nome']; ?>"><br>

            <label for="cpf">CPF: </label><br>
            <input class="form-control" type="text" name="cpf" value="<?= $pessoas['cpf']; ?>"><br>

            <label for="senha">Senha: </label><br>
            <input class="form-control" type="text" name="senha" value="<?= "*SENHA*"; ?>"><br>

            <label for="tipo_user">Tipo Usuário: </label><br>
            <input class="form-control" type="text" name="tipo_user" value="<?= $pessoas['tipo_user']; ?>"><br>

            <label for="data_nasc">Data de Nascimento: </label><br>
            <input class="form-control" type="date" name="data_nasc" value="<?= $pessoas['data_nasc']; ?>"><br>

            <input type="hidden" name="id" value="<?= $pessoas['id']; ?>">

            <button type="submit" class="btn btn-success">Editar</button>
            <a href="index_dash.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</main>
<?php
require_once("view/rodape.php");
?>