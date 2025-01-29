<?php
    namespace PHP\Modelo\DAO;
    require_once('conexao.php');
    use PHP\Modelo\dao\conexaoo;

    class Consultar{
        function consultarClienteIndividual(
            Conexao $conexao,
            string $cpf
        )

        {
            try{
                $conn = $conexao->conectar();
                $sql = "select *from cliente where codigo = '$cpf'";
                $result = mysqli_query($conn,$sql);

                while ($dados = mysqli_fetch_Array($result)){
                    if ($dados['codigo' == $cpf]){
                        return "<br><br>CPF:".$dados['cpf'].      
                        "<br><br>NOME:".$dados['nome'].
                        "<br><br>ENDERECO:".$dados['endereco'].
                        "<br><br>TELEFONE:".$dados['telefone'].
                        "<br><br>TOTAL:".$dados['total'];
                    
                            
                    }
                    return "Codigo digitado invalido!";
                } return "  Digite um cpf válido";

            }catch(Except $erro)
            {
                echo $erro;
            }
        }
   


        function consultarFuncionarioIndividual(
            Conexao $conexao,
            string $cpf
        )

        {
            try{
                $conn = $conexao->conectar();
                $sql = "select *from funcionario where codigo = '$cpf'";
                $result = mysqli_query($conn,$sql);

                while ($dados = mysqli_fetch_Array($result)){
                    if ($dados['codigo' == $cpf]){
                        return "<br><br>CPF:".$dados['cpf'].      
                        "<br><br>NOME:".$dados['nome'].
                        "<br><br>ENDERECO:".$dados['endereco'].
                        "<br><br>TELEFONE:".$dados['telefone'].
                        "<br><br>SALARIO:".$dados['salario'];
                    
                            
                    }
                    return "Codigo digitado invalido!";
                } return "  Digite um cpf válido";

            }catch(Except $erro)
            {
                echo $erro;
            }
        }

    }
    
?>