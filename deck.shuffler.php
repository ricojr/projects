<?php
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace"

);

var_dump($suits, $faces);

$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}
shuffle($deck);
$card = array_shift($deck);
for ($i=0; $i<=10; $i++) {
echo $card['face'] . ' of ' . $card['suit'] . "<br />";
}