<?php

namespace Cards;

class Card
{
    public $suit;
    public $face;

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

/*private $suit;
private $face;

public function __construct(string $suit,string $face)
{
    $this->suit = $suit;
    $this->face = $face;
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
}*/
