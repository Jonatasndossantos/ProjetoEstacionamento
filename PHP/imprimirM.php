<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <a href="../index.html">Home.html</a>
                <a href="ControllerCliente.php"><li>ControllerCliente.php</li></a>
                <a href="ControllerFuncionario.php"><li>ControllerFuncionari..&gt;</li></a>
                <a href="ControllerMensalista.php"><li>ControllerMensalista..&gt;</li></a>
            </ul>
        </nav>
    </header>
    <div class="imprimir">
        <?php
        session_start();
            echo $_SESSION['nome']; 
            echo "<br>";
            echo $_SESSION['endereco']; 
            echo "<br>";   
            echo $_SESSION['telefone'];  
            echo "<br>";  
            echo $_SESSION['dtNascimento'];
            echo "<br>";
            echo $_SESSION['carro'];     
            echo "<br>";  
            echo $_SESSION['placa'];   
            echo "<br>";    
            echo $_SESSION['cor'];          

        ?>
    </div>

</body>
</html>