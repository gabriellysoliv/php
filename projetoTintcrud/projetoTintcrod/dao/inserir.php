<?php
    namespace PHP\Modelo\dao;
    require_once('Conexao.php');
    use PHP\Modelo\dao\Conexao;
 
 
    class Inserir{
        function cadastrarCliente(Conexao $conexao,
                                string $cpf,
                                string $nome,
                                string $endereco,
                                string $telefone,
                                string $total
        ){
        try{
            $conn = $conexao->conectar();
            $sql = "Insert into cliente(codigo,nome,telefone,endereco, total)
                    values('$cpf','$nome','$telefone','$endereco','$total')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            
            if($result){
                return "<br><br> Inserido com sucesso!";
            }

            return "<br><br> Não inserido!";

        }

        catch(Except $erro)
        {
            return "<br><br>Algo deu errado".$erro;
        }
       
    }


    
    function cadastrarFuncionario(Conexao $conexao,
                                string $cpf,
                                string $nome,
                                string $endereco,
                                string $telefone,
                                string $salario
                                ){
        try{
            $conn = $conexao->conectar();
            $sql = "Insert into funcionario(codigo,nome,telefone,endereco, salario)
                    values('$cpf','$nome','$telefone','$endereco','$salario')";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
                                        
                if($result){
                    return "<br><br> Inserido com sucesso!";
                }
                            
                    return "<br><br> Não inserido!";
                            
                }
                            
                catch(Except $erro)
                {
                return "<br><br>Algo deu errado".$erro;
                }
                                   
                }
            }
                                   
 
 
 
?>
 