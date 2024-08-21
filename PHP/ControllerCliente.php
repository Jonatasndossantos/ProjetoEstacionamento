<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;

    require_once("Cliente.php");
    
    use Jonatas\ProjetoEstacionamento\PHP\ControllerCliente;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada Cliente</title>
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

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"><br><br>
        
        <label>Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label>Data de Nascimento:</label>
        <input type="text" id="dtNascimento" name="dtNascimento"><br><br>
       
        <label>Carro:</label>
        <input type="text" id="carro" name="carro"><br><br>
       
        <label>Placa:</label>
        <input type="text" id="placa" name="placa"><br><br>
       
        <label>Cor:</label>
        <input type="text" id="cor" name="cor"><br><br>
       
        <label>Data e Hora de Entrada:</label>
        <input type="text" id="dtHoraEntrada" name="dtHoraEntrada"><br><br>
       
        <label>Estacionamento:</label>
        <input type="text" id="estacionamento" name="estacionamento"><br><br>
       
        <button>Cadastrar
            <?php
              try{
                $nome          = $_POST['nome'];
                $endereco        = $_POST['endereco'];
                $telefone        = $_POST['telefone'];
                $dtNascimento = $_POST['dtNascimento'];
                $carro = $_POST['carro'];
                $placa = $_POST['placa'];
                $cor = $_POST['cor'];
                $dtHoraEntrada = $_POST['dtHoraEntrada'];
                $estacionamento = $_POST['estacionamento'];
                
                $cliente = new Cliente($nome,
                                        $endereco, 
                                        $telefone, 
                                        $dtNascimento,
                                        $carro,
                                        $placa,
                                        $cor,
                                        $dtHoraEntrada,
                                        $estacionamento,
                                      );
              }catch(Exception $erro){
                echo $erro;
              }//fim try
            ?>
        </button><br><br>
        <?php echo $cliente->imprimir();?>
    </form>
</body>
</html>
