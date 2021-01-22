<?php

namespace Alura\DesignPattern\Http;

class ReactHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instancia react php
        // prepara os dados
        //faz requisição
        echo "ReactPHP";
    }

}