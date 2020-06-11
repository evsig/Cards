<?php

namespace Cards;
require 'Card.php';
use Cards\Card as Card;

class Deck
{
    public $deck;
    public $suits;
    public $faces;

    public function __construct()
    {
        $this->suits = array(
            //"W","S","T","D"
            "♠", "♥", "♣", "♦"
        );
        $this->faces = array(
            "2", "3", "4", "5", "6", "7", "8",
            "9", "10", "J", "Q", "K", "A"
        );
    }

    public function printer()
    {
        if (empty($this->deck)){
            echo "Deck is destroed";
        }
        else {
            $i = 0;
            foreach ($this->deck as $key=> $item) {
                if ($item instanceof Card) {
                    echo("{$item->getSuit()}{$item->getFace()} ");
                    $i++;
                    if ($i % 13 == 0) {
                        echo "\n";
                    }
                }
            }
        }
    }

    public function fillDeck()
    {
    unset($this->deck);
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

    public function addCardInDeck($card){
        $face = $card->getFace();
        $suit = $card->getSuit();

        if (count($this->deck) >= 54){
            echo "\nDeck can't exist more than 54 cards\n";
        }
        else {

            if (in_array($card, $this->deck)) {
                echo "\nYour card {$card} is exist in deck\n";
            } else {
                if (in_array($face,$this->faces) || ($face == "J" & $suit == ("B" || "R"))){
                    if (in_array($suit,$this->suits) || ($face == "J" & $suit == ("B" || "R"))){
                        $this->deck[] = $card;
                    }
                    else print_r( "\nThat suit - {$suit} is not exist\n");
                }
                else print_r( "\nThat face - {$face} is not exist\n");
            }
        }
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
        $part1 = array_slice($this->deck, $index);
        $part2 = array_slice($this->deck, 0, $index);
        $this->deck = array_merge($part1, $part2);
        return $this->deck;
    }
        public function addCardWithCard($card1, $card2){
        $this->addCardInDeck($card1);
        $this->addCardInDeck($card2);
        return $this->deck;
    }

    public function addDeckInDeck($deck){
        $deck1= (array)$deck;
        return array_merge($this->deck,$deck1);
    }
}
