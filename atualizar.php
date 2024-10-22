<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pags.css">
    <title>Edição de Evento</title>
</head>
<body>
    <form action="valida_atualizacao.php" method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o código do evento que você deseja alterar:</td>
                    <td><input size="4" name="codigo" required></td>
                </tr>
                <tr>
                    <td>Informe o novo nome do evento:</td>
                    <td><input type="text" name="nome_evento" required></td>
                </tr>
                <tr>
                    <td>Informe a nova data do evento:</td>
                    <td><input type="date" name="data_evento" required></td>
                </tr>
                <tr>
                    <td>Informe o novo horário de início do evento:</td>
                    <td><input type="time" name="hr_inicio" required></td>
                </tr>
                <tr>
                    <td>Informe o novo horário de término do evento:</td>
                    <td><input type="time" name="hr_fim" required></td>
                </tr>
                <tr>
                    <td>Informe a nova descrição do evento:</td>
                    <td><input type="text" name="descricao" required></td>
                </tr>
                <tr>
                    <td>Informe o novo local do evento:</td>
                    <td><input type="text" size="100" name="local_event" required></td>
                </tr>
                <tr>
                    <td>Informe o novo responsável pelo evento:</td>
                    <td><input type="text" size="100" name="responsavel" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Atualizar"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
