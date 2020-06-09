<?php
echo 'Cards';

require 'Deck.php';
//require_once 'Card.php';
use Cards\Deck as Deck;
use Cards\Card as Card;

//create new card
$c1 = new Card("9","♠");
$c2 = new Card("2","♠");

//create new deck
//$d = new Deck();
$d2 = new Deck();

//fill deck 54 cards with Jokers
//$d2->fillDeck();

//get random order of cards in the deck
//$d->ShakeDeck();

//check destroing empty deck
//The deck is destroyed using the method is unset();
/*$d->addJokers();
$d->printer();
$d->GetCardFromDeck();
$d->printer();
$d->GetCardFromDeck();
$d->GetCardFromDeck();
$d->GetCardFromDeck();
$d->printer();*/

//Method pickUpDeck($index); pick up the deck/
//the $index indicates after which card account you need to pick up the deck
//$d->pickUpDeck(3);

//adding cards in deck
//$d->addJokers();
//$d->addCardInDeck("A","♠");
//$d->printer();
//adding existing cart in deck
//$d->addCardInDeck("R","J");
//$d->addCardInDeck("A","♠");
//$d->printer();

//adding deck $d2 in deck $d
//$d->addJokers();
//$d2->addCardInDeck("A","♠");
//$d2->addCardInDeck("J","♠");
//$d2->addCardInDeck("Q","♠");
//$d->addDeckInDeck($d2);
//$d->printer();
//var_dump($c);
$d2->addCardWithCard($c1,$c2);
//$d->addCardInDeck("A","♠");
//$d2->printer();

var_dump($d2);