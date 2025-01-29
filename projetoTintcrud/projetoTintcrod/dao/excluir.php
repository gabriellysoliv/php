<?php
    namespace PHP\Modelo\dao;
    require_once('conexao.php');
    use PHP\Modelo\dao\conexao;
    
    class Excluir{
        function excluirCliente(
            conexao $conexao,
            int $cpf)
        {
            $conn = $conexao->conectar();
            $sql = "delete from cliente where codigo = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if ($result){
                echo "Deletado com sucesso";

            }else{
                    echo "Não deletado";
            }
            
        }
     
    }//fim da classe
?>