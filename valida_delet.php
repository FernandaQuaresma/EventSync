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

// Excluir evento
$resultaDaQueryDelete = mysqli_query($conexao, "DELETE FROM evento WHERE id_evento='$codigo'");

if ($resultaDaQueryDelete) {
    echo "Evento excluído com sucesso!";
} else {
    echo "Erro na exclusão: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
