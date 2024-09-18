<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Proprietário</title>
    <link rel="stylesheet" href="animais.css">
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

