<?php

namespace App\Notificacoes;
interface Notificador
{
    public function enviar(string $mensagem): string;
    public static function getQuantidadeEnviada(): int;
}