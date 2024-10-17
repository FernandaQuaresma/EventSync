<meta charset="utf-8"> 
<?php
$codigo = $_POST['codigo']; // Este é o ID do evento
$data_evento = $_POST['nova_data']; 
$hora_inicio = $_POST['hora_inicio'];
$hora_fim = $_POST['hora_fim'];
$descricao = $_POST['descricao'];
$responsavel = $_POST['novo_responsavel'];
$local_evento = $_POST['local_evento']; // Adicionado para corresponder ao banco de dados
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventsync"; // Alterado para o nome correto do banco de dados
$conexao = mysqli_connect($host, $user, $pass, $base);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Atualização do evento
$resultaDaQueryUpdate = mysqli_query($conexao, "UPDATE evento SET data_evento = '$data_evento', hr_inicio = '$hora_inicio', hr_fim = '$hora_fim', descricao = '$descricao', local_event = '$local_evento', responsavel = '$responsavel' WHERE id_evento = '$codigo'");

if ($resultaDaQueryUpdate) {
    echo ("Atualização realizada com sucesso!");
} else {
    echo ("Erro na atualização: " . mysqli_error($conexao));
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
                <th>Hora Início</th>
                <th>Hora Fim</th>
                <th>Descrição do Evento</th>
                <th>Responsável pelo Evento</th>
                <th>Local do Evento</th>
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
                            <td>" . htmlspecialchars($escrever['responsavel']) . "</td>
                            <td>" . htmlspecialchars($escrever['local_event']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum evento cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php mysqli_close($conexao); ?>
</body>
</html>
