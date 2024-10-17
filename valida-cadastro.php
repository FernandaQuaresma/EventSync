<?php
$codigo = $_POST['codigo'];
$nome = $_POST['nome-evento'];
$data = $_POST['data-evento'];
$hr_inicio = $_POST['horario-inicio'];
$hr_fim = $_POST['horario-fim'];
$descricao = $_POST['descricao'];
$local_evento = $_POST['local-evento'];
$responsavel = $_POST['responsavel'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "EventSync";

// Conexão com o banco de dados
$conexao = mysqli_connect($host, $user, $pass, $base);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Inserção no banco de dados
$resultaDaQueryInsert = mysqli_query($conexao, "INSERT INTO evento(id_evento, nome_evento, data_evento, hr_inicio, hr_fim, descricao, local_event, responsavel) VALUES('$codigo', '$nome', '$data', '$hr_inicio', '$hr_fim', '$descricao', '$local_evento', '$responsavel')");

if (!$resultaDaQueryInsert) {
    die("Erro ao inserir evento: " . mysqli_error($conexao));
}

// Consulta para selecionar eventos cadastrados
$resultaDaQuerySelect = mysqli_query($conexao, "SELECT * FROM evento");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Cadastrados</title>
    <link rel="stylesheet" href="bd.css">
</head>
<body>
    <h1>Eventos Cadastrados</h1>

    <table class='event-table'>
        <thead>
            <tr>
                <th>Código do Evento</th>
                <th>Nome do Evento</th>
                <th>Data do Evento</th>
                <th>Responsável pelo Evento</th>
                <th>Hora Início</th>
                <th>Hora Fim</th>
                <th>Descrição do Evento</th>
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
                            <td>" . htmlspecialchars($escrever['responsavel']) . "</td>
                            <td>" . htmlspecialchars($escrever['hr_inicio']) . "</td>
                            <td>" . htmlspecialchars($escrever['hr_fim']) . "</td>
                            <td>" . htmlspecialchars($escrever['descricao']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Nenhum evento cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php mysqli_close($conexao); ?>
</body>
</html>
