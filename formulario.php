<?php

    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['e-mail']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $destinatario = "rogervoppe@gmail.com";
    $assunto = "Mensagem - Roger Voppe | Portfolio"

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem".$mensagem;

    $cabeca = "From: rogervoppe@hotmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($destinatario,$assunto,$corpo,$cabeca)){   
        echo("E-mail enviado com sucesso!");
    }else{
       echo("Houve um erro ao enviar o e-mail. :(");
    }

?>