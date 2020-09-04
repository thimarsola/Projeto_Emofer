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
        <p><strong>Mensagem:</strong><p>
        <br>
        <p>$messageForm</p>",
        "Thiago Marsola",
        "tmarsola94@gmail.com"
)->send();

if (!$email->error()) {
   
} else {
    echo $email->error()->getMessage();
}
        
