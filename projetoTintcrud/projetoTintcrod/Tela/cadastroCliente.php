<?php
    namespace PHP\Modelo\Telas;
    require_once ('..\Cliente.php');
    require_once ('..\dao\conexao.php');
    require_once ('..\dao\inserir.php');
    use PHP\Modelo\dao\Cliente;
    use PHP\Modelo\dao\conexao;
    use PHP\Modelo\dao\inserir;
    


?>

<!doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>

    <form method="POST">
    <div class="mb-3">
  <label for="lCpf" class="form-label">CPF</label>
  <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="99999999999">
</div>

<div class="mb-3">
  <label for="lnome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu Nome">
</div>

<div class="mb-3">
  <label for="lTelefone" class="form-label">Telefone</label>
  <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99)999999999">
</div>

<div class="mb-3">
  <label for="lendereco" class="form-label">Endereço</label>
  <input type="text" class="form-control" id="tCpf" name="tEndereco" placeholder="Insira seu endereco">
</div>

<div class="mb-3">
  <label for="lTotal" class="form-label">Total de Compras</label>
  <input type="text" class="form-control" id="tTotal" name="tTotal" placeholder="Total de compras">
</div>

    <button type="submit">Cadastrar
        <?php
          $conexao = new conexao();
            if(isset($_POST['tCpf'])){
            $cpf = $_POST ['tCpf'];
            $nome = $_POST ['tNome'];
            $telefone = $_POST ['tTelefone'];
            $endereco = $_POST ['tEndereco'];
            $total = $_POST ['tTotal'];

            $inserir = new  Inserir();
            echo $inserir->cadastrarCliente(
                                            $conexao,
                                            $cpf,
                                            $nome,
                                            $telefone,
                                            $endereco,
                                            $total);

        }
        ?>


    </button>
</form>



    </body>
</html>