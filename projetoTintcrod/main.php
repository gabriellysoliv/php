<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;


    //criando objeto
    $cliente1 = new Cliente("11111111111",
                        "João Carlos",
                        "99909-09099",
                        "Rua Jipa, 15",
                        1200);

    //funcionario



                    
                    
    //criando objeto
     $funcionario1 = new Funcionario("11111111111",
    "Pedro Oliveira",
    "3333-88484",
    "Rua , 15",
    1800);                       




//Visualizar dados 
  
    echo $cliente1->imprimir();
    echo $funcionario1->imprimir();
