<?php

namespace Alura\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        //biblioteca de log
        echo "salvando log de desconto: $descontoCalculado";
    }
}