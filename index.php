<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Certifique-se que este arquivo CSS esteja presente -->
    <script src="main.js"></script>
    <title>Event Sync</title>
</head>

<body>
    <header>
        <a href="#" class="brand">event sync</a>
        <div class="menu-btn"></div>
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
        <div class="content">
            <h1>EVENT<br><span>Sync</span></h1>
            <p>Bem-vindo ao EventSync, a plataforma ideal para simplificar sua experiência de planejamento de eventos.</p>
            <p>Se você está organizando um pequeno encontro, uma reunião corporativa ou uma grande celebração, o EventSync
                torna fácil sincronizar todos os detalhes.</p>
        </div>
    </section>

    <form action="valida-cadastro.php" method="POST" class="event-form">
        <fieldset>
            <ul>
                <li>
                    <label for="codigo">Crie um código para o evento:</label>
                    <input size="15" name="codigo" id="codigo">
                </li>
                <li>
                    <label for="nome-evento">Nome do evento:</label>
                    <input size="15" name="nome-evento" id="nome-evento">
                </li>
                <li>
                    <label for="data-evento">Data do evento:</label>
                    <input type="date" name="data-evento" id="data-evento">
                </li>
                <li>
                    <label for="horario-inicio">Horário de início do evento:</label>
                    <input type="time" name="horario-inicio" id="horario-inicio">
                </li>
                <li>
                    <label for="horario-fim">Horário do fim do evento:</label>
                    <input type="time" name="horario-fim" id="horario-fim">
                </li>
                <li>
                    <label for="descricao">Descrição do evento:</label>
                    <textarea name="descricao" id="descricao" rows="4" cols="50"></textarea>
                </li>
                <li>
                    <label for="local-evento">Local do evento:</label>
                    <input size="15" name="local-evento" id="local-evento">
                </li>
                <li>
                    <label for="responsavel">Responsável pelo evento:</label>
                    <input size="15" name="responsavel" id="responsavel">
                </li>
                <li>
                    <input type="submit" value="Cadastrar">
                </li>
            </ul>
        </fieldset>
    </form>

    <script type="text/javascript">
        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");

        menuBtn.addEventListener("click", () => {
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });
    </script>

</body>

</html>
