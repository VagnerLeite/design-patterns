<?php

namespace Alura\DesignPattern;

class Pedido
{
    public string $nomeCLiente;
    public \DateTimeInterface  $dataFinalizacao;
    public Orcamento $orcamento;
}
