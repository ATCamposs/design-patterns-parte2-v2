<?php

namespace Alura\DesignPattern;

use DateTimeInterface;

class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCLiente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFinalizacao(): DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}