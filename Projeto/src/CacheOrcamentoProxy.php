<?php

namespace Alura\DesignPattern;

use DomainException;

class CacheOrcamentoProxy implements Orcavel
{
    private float $valorCache = 0;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new DomainException("Não é possivel adicionar item a orçamento cacheado");
        
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}