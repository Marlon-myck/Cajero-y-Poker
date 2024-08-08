<?php

function repartirCartas(){
    $cartas = ["A♠", "K♠", "Q♠", "J♠", "10♠", "9♠", "8♠", "7♠", "6♠", "5♠", "4♠", "3♠", "2♠",
    "A♣", "K♣", "Q♣", "J♣", "10♣", "9♣", "8♣", "7♣", "6♣", "5♣", "4♣", "3♣", "2♣",
    "A♦", "K♦", "Q♦", "J♦", "10♦", "9♦", "8♦", "7♦", "6♦", "5♦", "4♦", "3♦", "2♦",
    "A♥", "K♥", "Q♥", "J♥", "10♥", "9♥", "8♥", "7♥", "6♥", "5♥", "4♥", "3♥", "2♥",];
    $baraja = [];
    foreach ($cartas as $carta) {
        $baraja[] = $carta;
}
shuffle($baraja);
return $baraja;

}

function mostrarCartas($baraja){
    return array_slice($baraja, 0, 5);
}

function evaluarMano($baraja){
    if (in_array(2, $baraja)):
        echo "Dupla";
        elseif (in_array(3, $baraja)):
            echo "trio";
        elseif (in_array(3, $baraja) && in_array(2, $baraja)):
            echo "Full House";
        elseif (in_array(4, $baraja)):
                echo "Poker";
        elseif (in_array(2, $baraja) && in_array(2, $baraja)):
                    echo "Doble dupla";
                else:
                    echo "Carta alta " . max($baraja) . "\n";

        endif;
    }

$baraja = repartirCartas();
$jugador1 = mostrarCartas($baraja);
$jugador2 = mostrarCartas($baraja);
print_r($jugador1);
print_r($jugador2);
echo "Mazo 1: ";
evaluarMano($jugador1);
echo "mazo 2: ";
evaluarMano($jugador2);

