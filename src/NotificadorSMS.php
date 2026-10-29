<?php

class NotificadorSMS implements Notificador
{
    private static int $quantidadeEnviada = 0;     

    public function enviar(string $mensagem): string{
        return "SMS: $mensagem";
    }

    public static function getQuantoidadeEnviada(): int
    {
        return self::getQuantoidadeEnviada();
    }
}