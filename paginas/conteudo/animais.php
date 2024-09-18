<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animal</title>
    <link rel="stylesheet" href="animais.css">
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
            
            <a href="../paginas/home.php?acao=listagem"><input type="submit" value="Cadastrar"></a>
        </form>
    </main>
</body>
</html>

