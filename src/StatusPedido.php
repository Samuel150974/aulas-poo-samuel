<?php

enum StatusPedido: string
{
    case Pendente = "Pendemte";
    case AguardandoPagamento = "Aguardando pagamemto";
    case Pago = "Pago";
    case EmPreparacao = "Em preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}