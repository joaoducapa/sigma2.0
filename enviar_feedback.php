<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Aqui você pode armazenar os dados em um banco de dados ou enviar por e-mail
    $to = "jrodriguesferreira309@gmail.com";
    $subject = "Feedback de $nome";
    $message = "Nome: $nome\nEmail: $email\nFeedback: $feedback";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback enviado com sucesso!";
    } else {
        echo "Erro ao enviar o feedback. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>