<?php

namespace Cards;

class Card //extends ArrayIterator
{
    public $suit;
    public $face;
    public $deck = [];
    private $card;

    public function __construct(string $face,string $suit)
    {
        $this->face = $face;
        $this->suit = $suit;
    }

    public function getFace()
    {
        return $this->face;
    }

    public function setFace($face): void
    {
        $this->face = $face;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function setSuit($suit): void
    {
        $this->suit = $suit;
    }

//    public function addCardWithCard($face, $suit, $deck){
//        $card = new Card($face,$suit);
//        //$deck = $this->deck;
////        $deck[] = $this->card;
//        $deck[] = $card;
//        return $deck;
//    }
}
