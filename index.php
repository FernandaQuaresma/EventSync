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
                <a href="protocolo-www.html">CONSULTAR EVENTO</a>
                <a href="servidores-webserver.html">MEUS EVENTOS</a>
                <a href="linguagens-php.html">ATUALIZAR EVENTO</a>
                <a href="endereçamento-ip.html">REMOVER EVENTO</a>
            </div>
        </div>
    </header>

    <section class="home">
        <video class="video-slide" src="yellow.mp4" autoplay muted loop></video> <!-- Correção aqui -->
        <div class="content">
            <h1>EVENT<br><span>Sync</span></h1>
            <p> Bem-vindo ao EventSync, a plataforma ideal para simplificar sua experiência de planejamento de eventos.</p>
            <p>Se você está organizando um pequeno encontro, uma reunião corporativa ou uma grande celebração, o EventSync
                torna fácil sincronizar todos os detalhes.</p>
        </div>
    </section>

    <form action="valida_cadastro.php" method="POST" class="event-form">
        <fieldset>
            <table>
                <tr>
                    <td>Crie um código para o evento:</td>
                    <td><input size="15" name="codigo"></td>
                </tr>
                <tr>
                    <td>Nome do evento:</td>
                    <td><input size="15" name="nome-evento"></td> <!-- Nome corrigido -->
                </tr>
                <tr>
                    <td>Data do evento:</td>
                    <td><input type="date" name="data-evento"></td> <!-- Tipo date adicionado -->
                </tr>
                <tr>
                    <td>Horário de início do evento:</td>
                    <td><input type="time" name="horario-inicio"></td> <!-- Tipo time adicionado -->
                </tr>
                <tr>
                    <td>Descrição do evento:</td>
                    <td><textarea name="descricao" rows="4" cols="50"></textarea></td> <!-- Usar textarea para descrição -->
                </tr>
                <tr>
                    <td>Local do evento:</td>
                    <td><input size="15" name="local-evento"></td>
                </tr>
                <tr>
                    <td>Responsável pelo evento:</td>
                    <td><input size="15" name="responsavel"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
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
