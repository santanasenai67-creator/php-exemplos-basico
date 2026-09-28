<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com validação</title>
</head>
<body>
    <form action = "" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required></textarea> <br>

        <button type="submit">Enviar</button>
        
    </form>

    <!-- Lógica de validação -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebe os valores
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $mensagem = $_POST['mensagem'] ?? '';

        //Valida se campos estiverem vazios e formato de email inválido
        if (!empty($nome) && !empty($mensagem) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color: Darkgreen'>Feedback enviado com sucesso!<br> Obrigado, $nome!</p>";
        } else {
            echo "<p style='color: red'>Por favor, preencha todos os campos corretamente.</p>";
        }
    }

    
    ?>
</body>
</html>