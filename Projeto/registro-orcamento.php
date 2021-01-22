<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;


$registroOrcamento = new RegistroOrcamento(new ReactHttpAdapter());
$registroOrcamento->registrar(new Orcamento());