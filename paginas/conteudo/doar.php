    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #F08080;
        }
        form {
            background-color: #F08080;
            padding: 20px;
            border-radius: 5px;
            color: white;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: white;
            color: #F08080;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #F08080;
            color: white;
        }
    </style>
    <div class="container">
        <h1>Agendamento de Doações</h1>
        <form action="process.php" method="post">
            <label for="name">Nome do Doador:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" required>

            <label for="date">Data da Doação:</label>
            <input type="date" id="date" name="date" required>

            <label for="description">O que é a doação:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <input type="submit" value="Agendar Doação">
        </form>
    </div>
