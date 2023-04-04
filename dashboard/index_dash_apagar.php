<?php

require_once("../adm/conexao.php");

$sql = "SELECT * FROM pessoas";
$comando = $pdo->prepare($sql);
$comando->execute();

// verificar se existe no banco de dados

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Listar registros da Base de Dados</h1>
    <a href="cadastrar.php">Adicionar novo registro</a><br><br>
    <table class="container table table-dark table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Senha</th>
                <th>Tipo_User</th>
                <th>Data_Naci</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($pessoas = $comando->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <tr>

                    <td><?php echo $pessoas['id'] ?></td>
                    <td><?php echo $pessoas['cpf'] ?></td>
                    <td><?php echo $pessoas['nome'] ?></td>
                    <td><?php echo $pessoas['senha'] ?></td>
                    <td><?php echo $pessoas['tipo_user'] ?></td>
                    <td><?php echo (date('d/m/Y', strtotime($pessoas['data_nasc']))) ?></td>
                    <td>
                        <div class="d-flex gap-3 justify-content-center">
                            <a href="" class="btn btn-info btn-sm">Editar</a>
                            <a href="" class="btn btn-danger btn-sm">Deletar</a>
                        </div>
                    </td>

                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>