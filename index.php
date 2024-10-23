<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                    <input size="15" name="codigo">
                </li>
                <li>
                    <label for="nome_evento">Nome do evento:</label>
                    <input size="15" name="nome_evento">
                </li>
                <li>
                    <label for="data_evento">Data do evento:</label>
                    <input type="date" name="data_evento">
                </li>
                <li>
                    <label for="hr_inicio">Horário de início do evento:</label>
                    <input type="time" name="hr_inicio">
                </li>
                <li>
                    <label for="hr_fim">Horário do fim do evento:</label>
                    <input type="time" name="hr_fim" >
                </li>
                <li>
                    <label for="descricao">Descrição do evento:</label>
                    <textarea name="descricao"  rows="4" cols="50"></textarea>
                </li>
                <li>
                    <label for="local_event">Local do evento:</label>
                    <input size="15" name="local_event" >
                </li>
                <li>
                    <label for="responsavel">Responsável pelo evento:</label>
                    <input size="15" name="responsavel" >
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
