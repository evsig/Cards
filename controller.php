<?php
require 'Deck.php';
use Cards\Deck as Deck;
use Cards\Card as Card;

//create new card
$c1 = new Card("9","♠");
$c2 = new Card("2","♠");
$wrongCard = new Card("2","2");

//create new deck
$d = new Deck();
$d2 = new Deck();
//$d->addJokers();

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
//$d->fillDeck();
//$d->pickUpDeck(3);
//$d->printer();

//adding cards in deck
//$d->fillDeck();
//$d->printer();
//$d->addCardInDeck($c1);
//$d->printer();
//var_dump ($d);

//adding existing cart in deck
//$d->addCardInDeck("R","J");
//$d->addCardInDeck("A","♠");
//$d->printer();

//adding deck $d2 in deck $d
//$d->addJokers();
//$d2->addCardInDeck("A","♠");
//$d2->addCardInDeck("J","♠");
//$d->addDeckInDeck($d2);
//$d->printer();

//$d2->printer();
//$d->addDeckInDeck($d2);
//$d->printer();

//validator of faces & suits
$d->addJokers();
$d->addCardInDeck($c1);
$d->addCardInDeck($wrongCard);
$d->printer();

