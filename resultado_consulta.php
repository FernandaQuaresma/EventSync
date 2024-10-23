<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Consulta</title>
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
        <!-- Adiciona o vídeo de fundo -->
        <video class="video-slide" src="yellow.mp4" autoplay muted loop></video>
        </section>
        <form method="POST" class="event-form">
    <fieldset>
        <h1>Resultado da Consulta</h1>

        <?php
        // Conexão com o banco de dados
        $host = "localhost:3306";
        $user = "root";
        $pass = "";
        $base = "eventsync";
        $conexao = mysqli_connect($host, $user, $pass, $base);

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        // Recebendo o código do evento via POST
        $codigo = $_POST['codigo'];

        // Consulta do evento pelo código
        $querySelect = "SELECT * FROM evento WHERE id_evento = '$codigo'";
        $resultaDaQuerySelect = mysqli_query($conexao, $querySelect);

        if (!$resultaDaQuerySelect || mysqli_num_rows($resultaDaQuerySelect) == 0) {
            echo "<p>Nenhum evento encontrado com o código informado.</p>";
        } else {
            echo "<table class='event-table'>
                    <thead>
                        <tr>
                            <th>Código do Evento</th>
                            <th>Nome do Evento</th>
                            <th>Data do Evento</th>
                            <th>Hora Início</th>
                            <th>Hora Fim</th>
                            <th>Descrição</th>
                            <th>Local</th>
                            <th>Responsável</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($evento = mysqli_fetch_assoc($resultaDaQuerySelect)) {
                echo "<tr>
                        <td>" . htmlspecialchars($evento['id_evento']) . "</td>
                        <td>" . htmlspecialchars($evento['nome_evento']) . "</td>
                        <td>" . htmlspecialchars($evento['data_evento']) . "</td>
                        <td>" . htmlspecialchars($evento['hr_inicio']) . "</td>
                        <td>" . htmlspecialchars($evento['hr_fim']) . "</td>
                        <td>" . htmlspecialchars($evento['descricao']) . "</td>
                        <td>" . htmlspecialchars($evento['local_event']) . "</td>
                        <td>" . htmlspecialchars($evento['responsavel']) . "</td>
                      </tr>";
            }

            echo "</tbody></table>";
        }

        mysqli_close($conexao);
        ?>
    </fieldset>
</body>
</html>
