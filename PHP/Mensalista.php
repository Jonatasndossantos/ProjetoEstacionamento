<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;

    require_once("Pessoa.php");
    Use Jonatas\ProjetoEstacionamento\PHP\Mensalista;
    Use Jonatas\ProjetoEstacionamento\PHP\Pessoa;

    class Mensalista extends Pessoa{

        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $dtNascimento;
        protected string $carro;
        protected string $placa;
        protected string $cor;

        function __construct(string $nome, 
                             string $endereco,
                             string $telefone,
                             string  $dtNascimento,
                             string $carro,
                             string $placa,
                             string $cor,
                            )
        {
            parent::__construct($dtNascimento,
                                $carro,
                                $placa,
                                $cor,
                                );
            $this->dtNascimento = $dtNascimento;
            $this->carro        = $carro;
            $this->placa        = $placa;
            $this->cor          = $cor;

        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return  parent::imprimir().
                    "<br>Nome: ".$this->nome.
                    "<br>Endereço: ".$this->endereco.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Data de Nascimento: ".$this->dtNascimento.
                    "<br>Carro: ".$this->carro.
                    "<br>Placa: ".$this->placa.
                    "<br>Cor: ".$this->cor;
        }//fim do imprimir

    }//fim da classe Mensalista
    

    
?>