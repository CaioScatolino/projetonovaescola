<?php
require_once("view/topo.php");
require_once("view/lateral.php");
?>

<main class=" col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <form method="post" action="processa/proc_cadastrar_pessoas.php">
            <label for="nome">Nome: </label><br>
            <input class="form-control" type="text" name="nome"><br>

            <label for="cpf">CPF: </label><br>
            <input class="form-control" type="text" name="cpf"><br>

            <label for="senha">Senha: </label><br>
            <input class="form-control" type="password" name="senha"><br>

            <label for="tipo_user">Tipo Usuário: </label><br>
            <input class="form-control" type="text" name="tipo_user"><br>

            <label for="data_nasc">Data de Nascimento: </label><br>
            <input class="form-control" type="date" name="data_nasc"><br>

            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</main>
<?php
require_once("view/rodape.php");
?>