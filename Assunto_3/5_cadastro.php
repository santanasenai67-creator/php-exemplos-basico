<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
</head>
<body>
    <form method="post" action="">
        <!--Campo Nome-->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> 
        
        <!--Campo Senha-->
        <label for="Senha">Senha:</label>
        <input type="password" name="senha" required>

       <!--Botão de enviar-->
        <button type="submit">cadastrar</button>

    </form>

    <!--logica de cadastro (PHP) -->
<?php
// Se o usuario enviou o (formulário) eu capturo valores
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
       
        // Gravando a informação recebida em um arquivo de texto
        // O "fopen" significa (File open ou abrir arquivo) e o "a" significa append ou acrescentar
        $arquivo = fopen("usuarios.txt", "a");

        //Cria uma linha com o nome e senha separados por;
        $linha = $nome . ";" . $senha . "\n";
        
        //Escreva a linha no arquivo (insere de fato)
        Fwrite($arquivo, $linha);

        //Fecha o arquivo
        fclose($arquivo);

        //Mensagem de sucesso (Feedbeck visual para o usuario)
        echo "<p>Usuario cadastrado com sucesso!</p>";

    }
    ?>

</body>
</html>