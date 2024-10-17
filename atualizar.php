<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Evento</title>
</head>
<body>
    <form action="valida-edicao.php" method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o código do evento que você deseja alterar:</td>
                    <td><input size="4" name="codigo" required></td>
                </tr>
                <tr>
                    <td>Informe a nova data do evento:</td>
                    <td><input type="date" name="nova_data" required></td>
                </tr>
                <tr>
                    <td>Informe o novo responsável pelo evento:</td>
                    <td><input type="text" size="100" name="novo_responsavel" required></td>
                </tr>
                <tr>
                    <td>Informe o novo horário de início do evento:</td>
                    <td><input type="time" name="hora_inicio" required></td>
                </tr>
                <tr>
                    <td>Informe o novo horário de término do evento:</td>
                    <td><input type="time" name="hora_fim" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Atualizar"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
