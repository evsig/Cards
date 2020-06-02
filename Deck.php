<?php

namespace Cards;
require 'Card.php';
use Cards\Card as Card;

class Deck
{
    /**
     * @var Card
     */
    public $deck = [];
    private $count;

    public function __construct()
    {
        $this->deck[] = new Card;
    }

    public function printer()
    {
        var_dump($this->deck);
    }

    public function FillDeck(array $deck)
    {
    $suits = array(
        "Spades", "Hearts", "Clubs", "Diamonds"
    );

    $faces = array(
        "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
        "Nine", "Ten", "Jack", "Queen", "King", "Ace"
    );
    foreach ($suits as $suit)
        {
            foreach ($faces as $face)
            {
                $deck[] = array("face" => $face, "suit" => $suit);
            }
        }
    $deck[] = array("Red", "Joker");
    $deck[] = array("Black", "Joker");
    }

}