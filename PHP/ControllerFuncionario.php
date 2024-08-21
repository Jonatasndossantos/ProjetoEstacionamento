<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;

    require_once('Codigo.php');
    require_once("Funcionario.php");
    
    use Jonatas\ProjetoEstacionamento\PHP\ControllerFuncionario;
    use Projeto\projetoEstacionamentoOficialClone\PHP\Codigo;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro Funcionario</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <a href="../index.php">Home.php</a>
                <a href="ControllerCliente.php"><li>ControllerCliente.php</li></a>
                <a href="ControllerFuncionario.php"><li>ControllerFuncionari..&gt;</li></a>
                <a href="ControllerMensalista.php"><li>ControllerMensalista..&gt;</li></a>
            </ul>
        </nav>
    </header>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label>Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"><br><br>
        
        <label>Cargo:</label>
        <input type="text" id="cargo" name="cargo"><br><br>
        
        <label>Salario:</label>
        <input type="text" id="salario" name="salario"><br><br>

        <button>Cadastrar
            <?php
              try{
                
                $nome         = $_POST['nome'];
                $telefone        = $_POST['telefone'];
                $endereco  = $_POST['endereco'];
                $cargo    = $_POST['cargo'];
                $salario = $_POST['salario'];

                
                $codigo1 = new Codigo();


                $funcionario1 = new Funcionario(
                                                $nome,
                                                $telefone,
                                                $endereco,
                                                $cargo,
                                                $salario);
              }catch(Exception $erro){
                echo $erro;
              }//fim try
            ?>
        </button><br><br>
        <?php
         echo $funcionario1->imprimir();
         echo $codigo1->imprimir();
        ?>
    </form>
</body>
</html>
