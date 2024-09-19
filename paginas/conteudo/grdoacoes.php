

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Doações</title>
    <link rel="stylesheet" href="grd.css">
</head>
<body>
    <h1>Lista de Doações</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Data da Doação</th>
                <th>Doação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lê o arquivo com as doações
            if (file_exists("doacoes.txt")) {
                $doacoes = file("doacoes.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                
                foreach ($doacoes as $doacao) {
                    list($nome, $email, $valor) = explode(";", $doacao);
                    echo "<tr>
                            <td>$nome</td>
                            <td>$endereço</td>
                            <td>$datadadoaçao</td>
                            <td>$doaçao</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhuma doação registrada.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
