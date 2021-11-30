<?php

use Alura\DesignPattern\Model\Lance;
use Alura\DesignPattern\Model\Leilao;
use Alura\DesignPattern\Model\Usuario;
use Alura\DesignPattern\Service\Avaliador;

require 'vendor\autoload.php';

// Arrange - Given
$leilao = new Leilao('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao = new Usuario('Joao');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

//Act - When
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// Assert - Then
$valorEsperado = 2500;

if ($maiorValor == $valorEsperado) {
    echo 'Teste OK';
} else {
    echo 'Teste Falhou';
}
