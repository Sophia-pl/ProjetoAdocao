<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Animal</h1>
    </header>
    <main>
        <form action="process_animal.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
            
            <label for="especie">Espécie:</label>
            <input type="text" id="especie" name="especie"><br>
            
            <label for="raca">Raça:</label>
            <input type="text" id="raca" name="raca"><br>
            
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0"><br>
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="M">Macho</option>
                <option value="F">Fêmea</option>
            </select><br>
            
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento"><br>
            
            <label for="id_proprietario">ID do Proprietário:</label>
            <input type="number" id="id_proprietario" name="id_proprietario"><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Clínica Veterinária</p>
    </footer>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Proprietário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Proprietário</h1>
    </header>
    <main>
        <form action="process_proprietario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
            
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco"><br>
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Clínica Veter

