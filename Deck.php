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
        $i =0;
        foreach ($this->deck as  $item){
            //foreach ($item as $value){
                //echo("{$item}{$value} ");
            echo("{$item->getSuit()}{$item->getFace()} ");
                $i++;
                if ($i%28==0){echo "\n";}
            //}
        }
    }

    public function fillDeck($deckName)
    {
    $suits = array(
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
                $this->deck[$deckName][] = new Card($suit,$face);
            }
        }
    $this->addJokers();
    return $this;
    }

    public function addJokers(){
        $this->deck[] = array("face" =>"J", "suit" =>"R");
        $this->deck[] = array("face" =>"J", "suit" =>"B");
        return $this;
    }

    public function shakeDeck(){
        $this->deck[] = shuffle($this->deck);
    }
    public function PutCardInDeck(){
        //pushes the passed variables onto the end of Deck.
        //The length of Deck increases by the number of variables pushed.
        $this->deck[] = array_push($this->deck,["face"=>"new","suit"=>"card"] );
    }
    public function getCardFromDeck(){
        //Pops and returns the value of the last element of the Deck,
        //shortening the Deck by one element.
        return array_pop($this->deck);
    }

    public function pickUpDeck($index){
        $count = count($this->deck);

        for($i=0;$i<=$count;$i++) {
            list($this->deck[($index + $i) % $count], $this->deck[$count-($index-$i)])
                = array($this->deck[$count-($index-$i)], $this->deck[($index + $i) % $count]);
        }
        return $this->deck;}

}
