<?php

namespace Cards;

class Card
{
    public $suit;
    public $face;

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
}
