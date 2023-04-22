<?php
require_once("../adm/conexao.php");

$sql = "SELECT * FROM pessoas";
$comando = $pdo->prepare($sql);
$comando->execute();

// verificar se existe no banco de dados

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- Pegando o nome recebido da session -->
    <h1 class="h2">Dashboard - <?php echo ($_SESSION['nome']); ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">XLS</button>
      </div>
      <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button> -->
    </div>
  </div>

  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

  <h2>Manutenção de Pessoas</h2>
  <div>
    <a href="cadastrar_apagar.php" class="btn btn-success mb-2">Cadastrar Usuário</a>
  </div>
  <div class="table-responsive">
    <table id="minhaTabela" class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>#ID</th>
          <th>CPF</th>
          <th>Nome</th>
          <th>Senha</th>
          <th>Tipo_User</th>
          <th>Data_Nasc</th>
          <th>Status</th>
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
            <td><?php echo ($pessoas['tipo_user'] == 1 ? "1 Professor"  : "2 Discente" )?></td>
            <td><?php echo (date('d/m/Y', strtotime($pessoas['data_nasc']))) ?></td>
            <td><?php echo ($pessoas['status'] == 1 ? "Ativo" : "Desativado") ?></td>
            <td>
              <div class="d-flex gap-3 justify-content-center">
                <a href="./editar_pessoas.php?id=<?=$pessoas['id'];?>" class="btn btn-info btn-sm">Editar</a>
                <a href="processa/proc_excluir_pessoas.php?id=<?=$pessoas['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Realmente quer deletar esse usuário?');">Deletar</a>
              </div>
            </td>

          </tr>
        <?php
        }
        ?>
  </div>
  </tbody>
  </table>
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

</main>
</div>
</div>