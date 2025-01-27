<?php
    namespace PHP\Modelo;
    require_once('pessoa.php');
    use PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        protected float $totalDeCompras;

        public function __construct (string $cpf,
                                     string $nome,
                                     string $telefone,
                                     string $endereco,
                                    float $totalDeCompras)
        {
        parent::__construct ($cpf,$nome,$telefone,$endereco);
    $this->totalDeCompras = $totalDeCompras;
        }

    public function __get(string $variavel):mixed
    {
        return $this->variavel;
    } 
    
    public function __set(string $variavel, string $novoDado):void
    {
        $this->variavel =$novoDado;
    }

    public function imprimir():string
    {
        return parent::imprimir().
                "<br>Total:".$this->totalDeCompras;       
    }//fim do metodo

    }
?>