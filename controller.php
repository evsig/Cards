<?php
echo 'Cards';

require 'Deck.php';
//require_once 'Card.php';
use Cards\Deck as Deck;
//use Cards\Deck as Card;
use Cards\Card as Card;

//create new card
$c = new Card("9","♠");

//create new deck
$d = new Deck();
$d2 = new Deck();

//fill deck 54 cards with Jokers
//$d->fillDeck();

//get random order of cards in the deck
//$d->ShakeDeck();

//check destroing empty deck
//The deck is destroyed using the method unset();
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
var_dump($c);
$c->addCardWithCard("R","J",$d2);
//$d->addCardInDeck("A","♠");
$d2->printer();
