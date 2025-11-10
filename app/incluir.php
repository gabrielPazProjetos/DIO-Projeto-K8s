<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $comentario = trim($_POST["comentario"]);

    if ($nome && $email && $comentario) {
        $stmt = $conn->prepare("INSERT INTO comentarios (nome, email, comentario) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $comentario);

        if ($stmt->execute()) {
            echo "Comentário enviado com sucesso!";
        } else {
            echo "Erro ao enviar comentário.";
        }

        $stmt->close();
    } else {
        echo "Todos os campos são obrigatórios.";
    }

    $conn->close();
} else {
    echo "Método inválido.";
}
?>
