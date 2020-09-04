<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Support\Email;

$subjectForm = $_POST['subject'];
$messageForm = $_POST['message'];
$nameForm = $_POST['name'];
$mailForm = $_POST['mail'];
$phoneForm = $_POST['phone'];
$mobileForm = $_POST['mobile'];


$email = new Email();

$email->add(
        $subjectForm,
        "<h1>Mensagem de contato site</h1>
        <br>
        <p>Olá Lojas Emofer,</p>
        <p>Me chamo {$nameForm}, estou entrando em contato através do formulário do site.</p>
        <br>
        <p>Aqui estão os meus dados para contato:</p>
        <p><strong>E-mail:</strong> <br>{$mailForm}</p>
        <p><strong>Telefone:</strong> <br>{$phoneForm}</p>
        <p><strong>Celular:</strong> <br>{$mobileForm}</p>
        <br>
        <p><strong>Eu gostaria de falar sobre:</strong></p>
        <p>{$subjectForm}</p>
        <br>
        <p><strong>Mensagem:</strong><p>
        <br>
        <p>$messageForm</p>",
        "Lojas Emofer",
        "emofer@emofer.com.br"
)->send();

if (!$email->error()) {
   echo "<script>alert('Mensagem enviada com sucesso! Em breve estaremos entrando em contato!');</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://emofer.com.br'>";  
} else {
    echo $email->error()->getMessage();
}
        
