<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <script src="main.js"></script>
    <title>Remover Evento</title>
</head>

<body>
    <header>
        <a href="index.php" class="brand">event sync</a>
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
        
    </section>

    <form action="valida_delet.php" method="POST" class="event-form">
        <fieldset>
            <ul>
                <li>
                    <label for="codigo">Informe o código do evento que deseja excluir:</label>
                    <input size="15" name="codigo" required>
                </li>
                <li>
                    <input type="submit" value="Excluir">
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
