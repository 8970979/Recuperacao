<?php

$quantidade = 7;

 if ($quantidade >= 10) {
    echo "O desconto sera de 20%";
 } elseif($quantidade >= 5) {
    echo "O desconto sera de 10%";
 } else {
    echo "Sem desconto";
 }