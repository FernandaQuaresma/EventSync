<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Evento</title>
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
        
        
        <form action="resultado_consulta.php" method="POST" class="event-form">
            <fieldset>
                <ul>
                    <li>
                        <label for="codigo">Informe o código do evento para consultar:</label>
                        <input type="text" id="codigo" name="codigo" required>
                    </li>
                    <li>
                        <input type="submit" value="Consultar">
                    </li>
                </ul>
            </fieldset>
        </form>
    </section>
</body>
</html>
