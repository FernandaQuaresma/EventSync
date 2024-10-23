<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Evento</title>
    <link rel="stylesheet" href="form.css"> 
</head>
<body>
    <video class="video-slide" src="yellow.mp4" autoplay muted loop></video>

    <header>
        <a href="index.php" class="brand">Event Sync</a>
        <div class="navigation">
            <div class="navigation-items">
                <a href="consultar.php">CONSULTAR EVENTO</a>
                <a href="meus-eventos.php">MEUS EVENTOS</a>
                <a href="atualizar.php">EDITAR EVENTO</a>
                <a href="remover.php">REMOVER EVENTO</a>
            </div>
        </div>
    </header>

    <section class="eventos">
        <?php
        $codigo = $_POST['codigo'];
        $nome_evento = $_POST['nome_evento'];
        $data_evento = $_POST['data_evento'];
        $hr_inicio = $_POST['hr_inicio'];
        $hr_fim = $_POST['hr_fim'];
        $descricao = $_POST['descricao'];
        $local_event = $_POST['local_event'];
        $responsavel = $_POST['responsavel'];

        $host = "localhost:3306";
        $user = "root";
        $pass = "";
        $base = "eventsync";

        $conexao = mysqli_connect($host, $user, $pass, $base);

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }


        $resultaDaQueryUpdate = mysqli_query($conexao, "UPDATE evento SET nome_evento='$nome_evento', data_evento='$data_evento', hr_inicio='$hr_inicio', hr_fim='$hr_fim', descricao='$descricao', local_event='$local_event', responsavel='$responsavel' WHERE id_evento='$codigo'");

        if ($resultaDaQueryUpdate) {
            echo "<div class='message'>Edição realizada com sucesso!</div>";
        } else {
            echo "<div class='message'>Erro na atualização: " . mysqli_error($conexao) . "</div>";
        }

        mysqli_close($conexao);
        ?>
    </section>
</body>
</html>
