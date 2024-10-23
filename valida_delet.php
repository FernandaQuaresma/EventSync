<meta charset="utf-8"> 
<?php
$codigo = $_POST['codigo'];

$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventsync";
$conexao = mysqli_connect($host, $user, $pass, $base);
?>
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

<?php
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}


$resultaDaQueryDelete = mysqli_query($conexao, "DELETE FROM evento WHERE id_evento='$codigo'");

if ($resultaDaQueryDelete) {
    echo "<div class=message>Evento excluído com sucesso!</div>";
} else {
    echo "Erro na exclusão: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
