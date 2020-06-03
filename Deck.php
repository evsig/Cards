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
    public $count;

    public function __construct()
    {
        $this->deck[] = new Card;
    }

    public function printer()
    {
        print_r($this->deck);
    }

    public function FillDeck()
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
                $this->deck[] = array("face" => $face, "suit" => $suit);
            }
        }
        $this->deck[] = array("face" =>"Joker", "suit" =>"Red");
        $this->deck[] = array("face" =>"Joker", "suit" =>"Black");
    return $this;
    }

    public function ShakeDeck(){
        $this->deck[] = shuffle($this->deck);
    }
    public function PutCardInDeck(){
        $this->deck[] = array_push($this->deck,["face"=>"new","suit"=>"card"] );
    }
    public function GetCardFromDeck(){
        return array_pop($this->deck);
    }

    public function PickUpDeck($index){
        $count = count($this->deck);
        for($i=1;$i<=$count;$i++) {
            list($this->deck[($index + $i) % $count], $this->deck[$i - 1]) = array($this->deck[$i - 1], $this->deck[($index + $i) % $count]);
        }
        return $this->deck;}

}