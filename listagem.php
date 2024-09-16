<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Animais</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Listagem de Animais</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>ID do Proprietário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de linha de dados -->
                <tr>
                    <td>1</td>
                    <td>Rex</td>
                    <td>Cachorro</td>
                    <td>Pastor Alemão</td>
                    <td>5</td>
                    <td>M</td>
                    <td>2019-09-10</td>
                    <td>2</td>
                    <td>
                        <a href="edit_animal.html?id=1">Editar</a>
                        <a href="delete_animal.php?id=1">Excluir</a>
                    </td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 Clínica Veterinária</p>
    </footer>
</body>
</html>