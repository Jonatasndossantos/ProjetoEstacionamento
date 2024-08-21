<?php
    //Definir o Projeto = Especificar as pastas
    namespace Jonatas\ProjetoEstacionamento\PHP;
    //Específica qual classe eu vou utilizar
    use Jonatas\ProjetoEstacionamento\PHP\Pessoa;

    class Pessoa{
        //Encapsular as variáveis
        //Declaração de Variáveis
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        //Instanciar = dar um valor inicial
        //Método Construtor
        public function __construct(
            string $nome, 
            string $telefone, 
            string $endereco)
        {
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do método construtor

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
            return "<br>Nome: ".$this->nome;
                   "<br>Telefone: ".$this->telefone;
                   "<br>Endereço: ".$this->endereco;
        }//fim do imprimir

    }//fim da classe
?>