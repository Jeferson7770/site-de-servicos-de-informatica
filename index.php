<?php
$mensagem = ""; // Inicializa a mensagem de aviso vazia

// Verifica se a solicitação é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["txtNome"];
    $nomeEmpresa = $_POST["txtNomeEmpresa"];
    $email = $_POST["txtEmail"];
    $telefone = $_POST["txtTelefone"];
    $assunto = $_POST["txtAssunto"];
    $mensagem = $_POST["txtMensagem"];

    $destinatario = "jefersonmoreira770@gmail.com";
    $mensagem_email = "Nome: $nome\nEmail: $email\nAssunto: $assunto\nMensagem:\n$mensagem";
    mail($destinatario, "Mensagem do Formulário de Contato", $mensagem_email);

    // Validação de campos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        $mensagem = "Por favor, preencha todos os campos obrigatórios (Nome, E-mail e Mensagem).";

    }

    // Exibe os dados (se definidos)
    echo "Nome: " . $nome . "<br>";
    
    if (isset($nomeEmpresa) && !empty($nomeEmpresa)) {
        echo "Nome da Empresa: " . $nomeEmpresa . "<br>";
    }
    
    echo "E-mail: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Assunto: " . $assunto . "<br>";
    echo "Mensagem: " . $mensagem . "<br>";

    
}
?>
