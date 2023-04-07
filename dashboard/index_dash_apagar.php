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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <h1>Listar registros da Base de Dados</h1>
    <a href="cadastrar_apagar.php">Adicionar novo registro</a><br><br>
    <div class="container-fluid d-flex justify-content-center">
        <table id="minhaTabela" class="table table-hover table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Tipo_User</th>
                    <th>Data_Nasc</th>
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
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<!-- DataTables JS + botões de exportação -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#minhaTabela').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
            },
            dom: 'Bfrtip',
            // "buttons": [
            //     'copy',
            //     'csv',
            //     'excel',
            //     'pdf',
            //     'print'
            // ],
            paging: true,
            title: "Teste",
            buttons: {
                buttons: [{
                        extend: 'pdf',
                        orientation: 'landscape',
                        title: 'teste2'
                    },
                    {
                        extend: 'excel'
                    }
                ]
            }
        });
    });
</script>

</html>