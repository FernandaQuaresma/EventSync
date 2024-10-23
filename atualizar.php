<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Edição de Evento</title>
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

    <div class="home">
        <video class="video-slide" src="yellow.mp4" autoplay muted loop></video>
        <form action="valida_atualizacao.php" method="POST" class="event-form">
            <fieldset>
                <table>
                    <tr>
                        <td>Código:</td>
                        <td><input size="4" name="codigo" required></td>
                    </tr>
                    <tr>
                        <td>Novo nome:</td>
                        <td><input type="text" name="nome_evento" required></td>
                    </tr>
                    <tr>
                        <td>Nova data:</td>
                        <td><input type="date" name="data_evento" required></td>
                    </tr>
                    <tr>
                        <td>Novo horário de início:</td>
                        <td><input type="time" name="hr_inicio" required></td>
                    </tr>
                    <tr>
                        <td>Novo horário de término:</td>
                        <td><input type="time" name="hr_fim" required></td>
                    </tr>
                    <tr>
                        <td>Nova descrição:</td>
                        <td><input type="text" name="descricao" required></td>
                    </tr>
                    <tr>
                        <td>Novo local:</td>
                        <td><input type="text" size="100" name="local_event" required></td>
                    </tr>
                    <tr>
                        <td>Novo responsável:</td>
                        <td><input type="text" size="100" name="responsavel" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Atualizar"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
