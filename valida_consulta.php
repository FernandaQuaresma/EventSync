<meta charset="utf-8">
<?php
$codigo = $_POST['codigo'];

$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventsync";
$conexao = mysqli_connect($host, $user, $pass, $base);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Consulta para buscar o evento pelo código
$resultaDaQuerySelect = mysqli_query($conexao, "SELECT * FROM evento WHERE id_evento='$codigo'");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Consulta</title>
</head>
<body>
    <h1>Resultado da Consultas</h1>

    <?php
    if (mysqli_num_rows($resultaDaQuerySelect) > 0) {
        $evento = mysqli_fetch_assoc($resultaDaQuerySelect);
        echo "<table border='1'>
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
                <tr>
                    <td>" . htmlspecialchars($evento['id_evento']) . "</td>
                    <td>" . htmlspecialchars($evento['nome_evento']) . "</td>
                    <td>" . htmlspecialchars($evento['data_evento']) . "</td>
                    <td>" . htmlspecialchars($evento['hr_inicio']) . "</td>
                    <td>" . htmlspecialchars($evento['hr_fim']) . "</td>
                    <td>" . htmlspecialchars($evento['descricao']) . "</td>
                    <td>" . htmlspecialchars($evento['local_event']) . "</td>
                    <td>" . htmlspecialchars($evento['responsavel']) . "</td>
                </tr>
              </table>";
    } else {
        echo "<p>Nenhum evento encontrado com o código informado.</p>";
    }

    mysqli_close($conexao);
    ?>
</body>
</html>
