<?php 



interface Notificador{

    public function enviar(string $mensagem): string;
   
    public static function getQuantoidadeEnviada(): int;
}