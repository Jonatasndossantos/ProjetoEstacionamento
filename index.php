<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Estacionamento</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
    <nav>
        <ul>
            <a href="PHP/ControllerCliente.php"><li>ControllerCliente.php</li></a>
            <a href="PHP/ControllerFuncionario.php"><li>ControllerFuncionari..&gt;</li></a>
            <a href="PHP/ControllerMensalista.php"><li>ControllerMensalista..&gt;</li></a>
        </ul>
    </nav>
    </header>

    <main>
        <?php
            session_start();
                echo $_SESSION["Mensalista"];   

        ?>
    </main>
</body>
</html>