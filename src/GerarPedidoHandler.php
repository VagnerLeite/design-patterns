<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct(/* Pedidorepository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTime();
        $pedido->nomeCLiente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "Cria pedido no banco de dados ". PHP_EOL;
        // MailService
        echo "Envia E-mail para cliente ". PHP_EOL;
        echo "Geração de log de criação de pedido" . PHP_EOL;
    }
}