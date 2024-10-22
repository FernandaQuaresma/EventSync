<meta charset="utf-8"> 
<?php
$codigo = $_POST['codigo'];
$nome_evento = $_POST['nome_evento'];
$data_evento = $_POST['data_evento'];
$hr_inicio = $_POST['hr_inicio'];
$hr_fim = $_POST['hr_fim'];
$descricao = $_POST['descricao'];
$local_event = $_POST['local_event'];
$responsavel = $_POST['responsavel'];

$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventsync";

$conexao = mysqli_connect($host, $user, $pass, $base);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Atualização do evento
$resultaDaQueryUpdate = mysqli_query($conexao, "UPDATE evento SET nome_evento='$nome_evento', data_evento='$data_evento', hr_inicio='$hr_inicio', hr_fim='$hr_fim', descricao='$descricao', local_event='$local_event', responsavel='$responsavel' WHERE id_evento='$codigo'");

if ($resultaDaQueryUpdate) {
    echo "Atualização realizada com sucesso!";
} else {
    echo "Erro na atualização: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
