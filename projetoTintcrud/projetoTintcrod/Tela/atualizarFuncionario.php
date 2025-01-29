<?php
namespace PHP\Modelo\Tela;
require_once('..\dao\conexao.php');
require_once('..\dao\atualizar.php');
use PHP\Modelo\dao\conexao;
use PHP\Modelo\dao\atualizar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
        <form method="POST">
            <label>CPF:</label>
            <input type="string" name="tCpf"/> <br><br>

            <label>Escolha o campo que deseja atualizar:</label>
            <select name="tCampo" >
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="endereco">Endereço</option>
                <option value="total">Total de compras</option>
            </select><br><br>
            <label>Novo dado:</label>
            <input type="text" name="tNovoDado"/><br><br>

            <button type="submit">Atualizar</button>

            <?php 
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                    $atualizar = new atualizar();
                    $cpf = $_POST['tCpf'];
                    $campo = $_POST['tCampo'];
                    $novoDado = $_POST['tNovoDado'];
                }

            ?>
        </form>

        <?php
            if(isset($_POST['tCpf'])){
                echo $atualizar->atualizarFuncionario(
                $conexao,
                $campo,
                $novoDado,
                $cpf
            ); 
        }
        ?>
</body>
</html>