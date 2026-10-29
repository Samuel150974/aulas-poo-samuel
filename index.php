<?php

require_once "./src/Notificador.php";

require_once "./src/NotificadorEmail.php";

require_once "./src/NotificadorSMS.php";

$notificadorPorEmail = new NotificadorEmail();
$notificadorPorSMS =  new NotificadorSMS();

// Pedido 123abc

$emailPedido1 = $notificadorPorEmail->enviar("Seu pedido 123abc foi confirmado");
$smsPedido1 = $notificadorPorSMS->enviar("Seu pedido 123abc foi confirmado");

// Pedido

$emailPedido2 = $notificadorPorEmail->enviar("Seu pedido 566abc foi confirmado");

$emailPedido3 = $notificadorPorEmail->enviar("Seu pedido 455abc foi confirmado");

/* ****************** */

$notificadorPorEmailTeste2 = new NotificadorEmail();
$notificadorPorEmailTeste3 = new NotificadorEmail();

$notificadorPorEmailTeste2->enviar("pedidos entregues");
$notificadorPorEmailTeste3->enviar("pedidos á espera de avaliação");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Notificações da loja virtual</h1>
            <p>Simulações de notificações sobre pedidos por e-mail e SMS</p>
        </header>

        <div class="conteudos">

            <article class="card-conteudo">
                <h2>Notificações: Pedido 123abc</h2>
                <p> <?= $emailPedido1 ?> </p>
                <p> <?= $smsPedido1 ?> </p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 566abc</h2>
                <p> <?= $emailPedido2 ?> </p>
                <p> </p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 455abc</h2>
                <p> <?= $emailPedido3 ?> </p>
                <p> </p>
            </article>

        </div>

        <hr>

        <section class="card-conteudo">

            <h2>Resumo/Total dos envios de notificações</h2>

            <p>E-mails enviados: <b> <?= NotificadorEmail::getQuantidadeEnviada() ?></b></p>

            <p>SMS enviados: <b> <?= NotificadorEmail::getQuantidadeEnviada() ?></b></p>

        </section>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Propriedades estáticas usando <b>static</b></li>
                <li>Métodos estáticos usando <b>static</b></li>
                <li>Acesso a recursos estáticos com <b>::</b></li>
                <li>Acesso a recursos estáticos da própria classe usando <b>self</b></li>
                <li>Diferença entre usar recursos estáticos de classe e recursos de objeto</li>
            </ul>

        </div>

    </div>
</body>

</html>