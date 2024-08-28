<?php
    namespace Jonatas\ProjetoEstacionamento\PHP;

    require_once("Mensalista.php");
    
    use Jonatas\ProjetoEstacionamento\PHP\ControllerMensalista;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada Mensalista</title>
    <link rel="stylesheet" href="../css/estilo.css">

    <link rel="stylesheet" href="../src/style.css"> 
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
    <div class="buttons">
        <button id="toggle" class="button"> <img src="../img/dark.png" alt="lua" width="50"></button>
        <button id="refresh" class="button">refresh</button>
    </div>  

    <div class="conteudo">
        <div class="informacoes ativa">
            <ul>
                <li>Nome</li>
            </ul>
        </div>



        <div class="informacoes">
            <form method="POST">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome"><br><br>

                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco"><br><br>
                
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone"><br><br>

                <label>Data de Nascimento:</label>
                <input type="date" id="dtNascimento" name="dtNascimento"><br><br>
            
                <label>Carro:</label>
                <input type="text" id="carro" name="carro"><br><br>
            
                <label>Placa:</label>
                <input type="text" id="placa" name="placa"><br><br>
            
                <label>Cor:</label>
                <input type="text" id="cor" name="cor"><br><br>
            
                    
            </form>
                    
            <button class="botao selecionado">
                cadastrar
            </button>

            <button class="botao">Cadastrar
                <?php
                    session_start();
                    try{ 
                        $_SESSION['nome']         = $_POST['nome'];
                        $_SESSION['endereco']     = $_POST['endereco'];
                        $_SESSION['telefone']     = $_POST['telefone'];
                        $_SESSION['dtNascimento'] = $_POST['dtNascimento'];
                        $_SESSION['carro']        = $_POST['carro'];
                        $_SESSION['placa']        = $_POST['placa'];
                        $_SESSION['cor']          = $_POST['cor'];
                        
                        $mensalista = new Mensalista($_POST['nome'],
                                                    $_POST['endereco'],
                                                    $_POST['telefone'],
                                                    $_POST['dtNascimento'],
                                                    $_POST['carro'],
                                                    $_POST['placa'],
                                                    $_POST['cor'],  
                    );
                    
                    }catch(Exception $erro){
                        echo $erro;
                    }//fim do try_catch
                ?>

            </button><br><br>


        </div>
    </div>
    <script src="../src/script.js"></script>

    <script src="../js/index.js"></script>
</body>
</html>
