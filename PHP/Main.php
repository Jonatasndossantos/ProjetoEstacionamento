<?php
    //Conectando a classe ao projeto
    namespace Jonatas\ProjetoEstacionamento\PHP;
    //Colocar qual classe eu utilizar
    require_once("Pessoa.php");
    require_once("Funcionario.php");
    //Mostrar quem eu vou usar - reforço
    Use Jonatas\ProjetoEstacionamento\PHP\Pessoa;
    Use Jonatas\ProjetoEstacionamento\PHP\Compra;
    Use Jonatas\ProjetoEstacionamento\PHP\Funcionario;

    //Instanciar o livro = Dar o valor inicial
   

    //echo $livro1->imprimir();

    

    $func1 = new Funcionario(
                    "123414",
                    "Allan",
                    "rara",
                    "Rua",
                    "Comercial"
                    );
    //echo $func1->imprimir();

    
    /*echo $cliente1->imprimir();

    $reserva1 = new Reserva(
                    1,
                    "Romeu e Julieta",
                    "Allan",
                    2
    );//fim do método

    echo $reserva1->imprimir();*/

    //Teste Reserva de Livros
    session_start();
        echo $_SESSION['nome'];          


?>