<?php

$nome = addslashes($_POST['caixa-nome']);
$email = addslashes($_POST['caixa-email']);
$contato = addslashes($_POST['caixa-contato']);

$destino = 'abigalskull17@gmail.com';
$assunto = 'Mensagem - Projecto Portifólio';

$corpo = "Nome: ".$nome."\n"."Emai-l: ".$email."\n"."Contacto: ".$contato;

$cabeca = "From: albertomayunga12@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversuion();

if(mail($destino,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");    
}else{
    echo("Houve um erro ao enviar o e-mail!!");
}

?>