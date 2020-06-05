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

    public $suits;
    private $faces;
    /**
     * @var string
     */
    private $Name;


    public function __construct()
    {
        $this->suits = array(
            //"П","Ч","К","Б"
            "♠", "♥", "♣", "♦"
        );
        $this->faces = array(
            "2", "3", "4", "5", "6", "7", "8",
            "9", "10", "J", "Q", "K", "A"
        );
    }

    public function printer()
    {
        echo "\n".$this->Name."\n";
        if (empty($this->deck)){
            echo "Deck is destroed";
        }
        else {
            $i = 0;
            foreach ($this->deck as $key=> $item) {
                echo("{$item->getSuit()}{$item->getFace()} ");
                $i++;
                if ($i % 13 == 0) {
                    echo "\n";
                }
            }
        }
    }

    public function fillDeck()
    {
    foreach ($this->suits as $suit)
        {
            foreach ($this->faces as $face)
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

    public function addCardInDeck($face,$suit){
        $card = new Card($face,$suit);
        if (in_array($card,$this->deck)){
            echo "\nYour card {$suit}{$face} is exist in deck";
        }
        else $this->deck[] = $card;
    }

    public function addCardWithCard($face, $suit){
        $card = new Card($face,$suit);
        $this->deck[] = $this->card;
        $this->deck[] = $card;
        return $this->deck;
    }

    public function getCardFromDeck(){
        if (empty($this->deck)){
            unset($this->deck);
            return "The deck is destroyed";
            //Pops and returns the value of the last element of the Deck,
            //shortening the Deck by one element
        }
        else return array_pop($this->deck);
    }

    public function pickUpDeck($index){
        $count = count($this->deck);

        for($i=0;$i<=$count;$i++) {
            list($this->deck[($index + $i) % $count], $this->deck[$count-($index-$i)])
                = array($this->deck[$count-($index-$i)], $this->deck[($index + $i) % $count]);
        }
        return $this->deck;
    }

    public function addDeckInDeck($array){
//        $array= new Deck();
//        for ($i=0;$i<=count($array);$i++) {
//            array_push($this->deck, $array[$i]);
//        }
    return $this->deck = $this->deck + $array;
    }

    public function validator($suit,$face){
        foreach ($this->suits as $suit)
        {
            if ($this->suits == $suit || ($this->suits == ("R"||"B"))&($this->faces == ("J")))
                foreach ($this->faces as $face)
                {
                    if ($this->faces == $face){
                        return new Card($suit,$face);
                    }
                    else return "That face is not exist";
                }
            else return "That suit is not exist";
        }
    }
}
