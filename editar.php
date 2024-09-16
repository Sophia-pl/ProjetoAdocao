<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Animal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Editar Animal</h1>
    </header>
    <main>
        <form action="update_animal.php" method="POST">
            <input type="hidden" name="id" value="<!--ID do Animal-->" />
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<!-- Nome do Animal -->" required><br>
            
            <label for="especie">Espécie:</label>
            <input type="text" id="especie" name="especie" value="<!-- Espécie do Animal -->"><br>
            
            <label for="raca">Raça:</label>
            <input type="text" id="raca" name="raca" value="<!-- Raça do Animal -->"><br>
            
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" value="<!-- Idade do Animal -->" min="0"><br>
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="M" <!-- Se Macho --> >Macho</option>
                <option value="F" <!-- Se Fêmea --> >Fêmea</option>
            </select><br>
            
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="<!-- Data de Nascimento -->"><br>
            
            <label for="id_proprietario">ID do Proprietário:</label>
            <input type="number" id="id_proprietario" name="id_proprietario" value="<!-- ID do Proprietário -->"><br>
            
            <input type="submit" value="Atualizar">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Clínica Veterinária</p>
    </footer>
</body>
</html>