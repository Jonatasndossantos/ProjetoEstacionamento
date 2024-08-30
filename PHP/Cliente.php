<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;

    require_once("Pessoa.php");
    Use Jonatas\ProjetoEstacionamento\PHP\Cliente;
    Use Jonatas\ProjetoEstacionamento\PHP\Pessoa;

    class Cliente extends Pessoa{
        protected int $dtNascimento;
        protected int $carro;
        protected int $placa;
        protected int $cor;
        protected float $dtHoraEntrada;
        protected float $estacionamento;

        function __construct(string $nome, 
                            string $endereco,
                            string $telefone,
                            string $dtNascimento,
                            string $carro,
                            string $placa,
                            string $cor,
                            string $dtHoraEntrada,
                            string $estacionamento,
                            )
        {
            parent::__construct($dtNascimento,
                                $carro,
                                $placa,
                                $cor,
                                $dtHoraEntrada,
                                $estacionamento,
                                );
            $this->dtNascimento   = $dtNascimento;
            $this->carro          = $carro;
            $this->placa          = $placa;
            $this->cor            = $cor;
            $this->dtHoraEntrada  = $dtHoraEntrada;
            $this->estacionamento = $estacionamento;

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
                    "<br>Código: ".$this->dtNascimento.
                    "<br>Código: ".$this->carro.
                    "<br>Código: ".$this->placa.
                    "<br>Código: ".$this->cor.
                    "<br>Código: ".$this->dtHoraEntrada.
                    "<br>Total de Compras: ".$this->estacionamento;
        }//fim do imprimir

    }//fim da classe Cliente
?>