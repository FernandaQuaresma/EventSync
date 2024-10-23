<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Cadastrados</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
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

    <section class="home">
        <video class="video-slide" src="yellow.mp4" autoplay muted loop></video>
</section>
<form method="POST" class="event-form">
    <fieldset>
    <h1>Eventos Cadastrados</h1>

            <table class='event-table'>
                <thead>
                    <tr>
       
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

        $queryInsert = "INSERT INTO evento(id_evento, nome_evento, data_evento, hr_inicio, hr_fim, descricao, local_event, responsavel) 
                    VALUES ('$codigo', '$nome_evento', '$data_evento', '$hr_inicio', '$hr_fim', '$descricao', '$local_event', '$responsavel')";

        $resultaDaQueryInsert = mysqli_query($conexao, $queryInsert);

        if (!$resultaDaQueryInsert) {
            die("Erro ao inserir evento: " . mysqli_error($conexao));
        }

        $querySelect = "SELECT * FROM evento";
        $resultaDaQuerySelect = mysqli_query($conexao, $querySelect);

        if (!$resultaDaQuerySelect) {
            die("Erro ao buscar eventos: " . mysqli_error($conexao));
        }
        ?>

        <table class='event-table'>
            <thead>
                <tr>
                    <th>Código do Evento</th>
                    <th>Nome do Evento</th>
                    <th>Data do Evento</th>
                    <th>Hora Início</th>
                    <th>Hora Fim</th>
                    <th>Descrição do Evento</th>
                    <th>Local do Evento</th>
                    <th>Responsável pelo Evento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($resultaDaQuerySelect) > 0) {
                    while ($escrever = mysqli_fetch_assoc($resultaDaQuerySelect)) {
                        echo "<tr>
                                <td>" . htmlspecialchars($escrever['id_evento']) . "</td>
                                <td>" . htmlspecialchars($escrever['nome_evento']) . "</td>
                                <td>" . htmlspecialchars($escrever['data_evento']) . "</td>
                                <td>" . htmlspecialchars($escrever['hr_inicio']) . "</td>
                                <td>" . htmlspecialchars($escrever['hr_fim']) . "</td>
                                <td>" . htmlspecialchars($escrever['descricao']) . "</td>
                                <td>" . htmlspecialchars($escrever['local_event']) . "</td>
                                <td>" . htmlspecialchars($escrever['responsavel']) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nenhum evento cadastrado.</td></tr>";  
                }
                ?>
            </tbody>
        </table>

        <?php mysqli_close($conexao); ?>
    </section>
</body>
</html>
