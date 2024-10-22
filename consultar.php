<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Evento</title>
</head>
<body>
    <h1>Consultar Evento pelo Código</h1>
    <form action="resultado_consulta.php" method="POST">
        <label for="codigo">Informe o código do evento:</label>
        <input type="text" id="codigo" name="codigo" required>
        <input type="submit" value="Consultar">
    </form>
</body>
</html>
