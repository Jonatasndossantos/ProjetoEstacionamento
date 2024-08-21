<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;
    
    require_once("Pessoa.php");
    Use Jonatas\ProjetoEstacionamento\PHP\Funcionario;
    Use Jonatas\ProjetoEstacionamento\PHP\Pessoa;

    Class Funcionario extends Pessoa{
        protected string $cargo;
        protected float $salario;

        public function __construct(
            string $nome,
            string $telefone,
            string $endereco,
            string $cargo,
            float $salario,
        ){
            parent::__construct(
                                $nome,
                                $telefone,
                                $endereco);
            $this->cargo  = $cargo;
            $this->salario = $salario;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->$name = $value;
        }//fim do set

        public function imprimir():string
        {
            
            return parent::imprimir().  
                   "<br>Cargo: ".$this->cargo.
                   "<br>Salário: ".$this->salario;
        }//fim do método



    }//fim da classe
?>