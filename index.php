<?php
require_once "./src/Pedido.php";

require_once "./src/StatusPedido.php";

require_once "./src/Notificador.php";

require_once "./src/NotificadorEmail.php";




$notificadorPorEmail = new NotificadorEmail();

/* Repare no terceiro parâmetro: é OBRIGATÓRIO usar uma das opções definadas na Enum. */

$pedido1 = new Pedido(1001, "Fulano da silva", StatusPedido::Pendente);

$pedido2 = new Pedido(1002, "Beltrano da silva", StatusPedido::Pendente);

$pedido3 = new Pedido(1003, "Calabreso da aurora", StatusPedido::AguardandoPagamento);

$pedido4 = new Pedido(1004, "Tortuguita do chocolate", StatusPedido::SaiuParaEntrega);

// Alterando o status de acordo com as opções válidas da Enum
$pedido3->setStatus(StatusPedido::Pago);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4];
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
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, Em preparação, Pago ou Saiu para entrega</p>
        </header>

        <div class="conteudos">
            <?php foreach ($pedidos as $pedido): ?>
                <article class="card-conteudo">
                    <h2>Pedido # <?= $pedido->getNumero() ?></h2>
                    <p>Cliente: <?= $pedido->getCliente() ?></p>
                    <p>Status:
                        <!-- Atenção ao uso necessário do value para mostrar os valores -->
                        <b class="destaque"> <?= $pedido->getStatus()->value ?> </b>
                    </p>
                    <?php
                    $mensagem = 'Seu pedido #' . $pedido->getNumero() . 'está com o status: ' .
                        $pedido->getStatus()->value;
                    ?>

                    <p><small><?= $notificadorPorEmail->enviar($mensagem) ?></small></p>






                </article>

            <?php endforeach; ?>


        </div>

        <hr>


        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Enumerações com um conjunto definido de opções usando <b>case</b></li>
                <li>Casos associados a valores do tipo <b>string</b></li>
                <li>Acesso a um caso com <b>StatusPedido::NomeDoCaso</b></li>
                <li>Acesso ao valor/texto do caso com <b>->value</b></li>
            </ul>


        </div>

    </div>
</body>

</html>