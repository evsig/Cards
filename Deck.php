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

    public $card;
    /**
     * @var string
     */
    private $Name;


    public function __construct()
    {

    }

    public function printer()
    {
        //print_r($this->deck);
        //$deck = $this->deck;
        echo "\n".$this->Name."\n";
        if (empty($this->deck)){
            echo "Deck is destroed";
        }
        else {
            $i = 0;
            foreach ($this->deck as $item) {
                //foreach ($item as $value){
                //echo("{$item}{$value} ");
                echo("{$item->getSuit()}{$item->getFace()} ");
                $i++;
                if ($i % 13 == 0) {
                    echo "\n";
                }
                //}
            }
        }
    }

    public function fillDeck()
    {
    $suits = array(
        //"П","Ч","К","Б"
        "♠", "♥", "♣", "♦"
    );

    $faces = array(
        "2", "3", "4", "5", "6", "7", "8",
        "9", "10", "J", "Q", "K", "A"
    );
    foreach ($suits as $suit)
        {
            foreach ($faces as $face)
            {
                $this->deck[] = new Card($suit,$face);
            }
        }
    $this->addJokers();
    return $this;
    }

    public function addJokers(){
        $this->deck[] = new Card("R","J");
        $this->deck[] = new Card("B","J");
        return $this;
    }

    public function shakeDeck(){
        $this->deck[] = shuffle($this->deck);
    }
    public function PutCardInDeck($face,$suit){
        //pushes the passed variables onto the end of Deck.
        //The length of Deck increases by the number of variables pushed.
        $card = new Card($face,$suit);

        $this->deck[] = array_push($this->deck,new Card($face,$suit) );
    }
    public function getCardFromDeck(){
        //Pops and returns the value of the last element of the Deck,
        //shortening the Deck by one element
        if (empty($this->deck)){
            unset($this->deck);
            return "This card already exists in the deck";
        }
        else return array_pop($this->deck);
    }

    public function pickUpDeck($index){
        $count = count($this->deck);

        for($i=0;$i<=$count;$i++) {
            list($this->deck[($index + $i) % $count], $this->deck[$count-($index-$i)])
                = array($this->deck[$count-($index-$i)], $this->deck[($index + $i) % $count]);
        }
        return $this->deck;}

}