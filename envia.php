<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = "e-mail"
    $assunto = "Formulario - Site"

    $corpo = "Nome: ".$nome."\n"."E-mail ".$email."\n"."Telefone ".$telefone;

    $cabecalho = "From: showbrman@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino, $assunto, $corpo, $cabecalho)){
        echo("E-mail enviado com sucesso!");
    }
    else(mail($destino, $assunto, $corpo, $cabecalho)){
        echo("Houve um erro ao enviar o e-mail")
    }

?>
