<?php

$conta2 = new ContaBancaria();
$conta2->setTitular("Maria");

echo "Conta 2" . $conta2->getTitular();

echo "Saldo inicial: R$ " .
    number_format($conta2->consultarSaldo());

$conta2->depositar(500);

echo "Após depósito de R$ 500,00: R$ " .
    number_format($conta2->consultarSaldo());

echo "Tentando sacar R$ 200,00:<br>";
$conta2->sacar(200);

echo "Saldo após saque: R$ " .
    number_format($conta2->consultarSaldo());

echo "Tentando sacar R$ 500,00:<br>";
$conta2->sacar(500);

echo "Saldo final: R$ " .
    number_format($conta2->consultarSaldo());
