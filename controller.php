<?php
echo 'Cards';

require 'Deck.php';
use Cards\Deck as Deck;

$d = new Deck();

//$d->fillDeck();

//$d->ShakeDeck();
//$d->PutCardInDeck();

//check destroing empty deck
/*$d->addJokers();
$d->printer();
$d->GetCardFromDeck();
$d->printer();
$d->GetCardFromDeck();
$d->GetCardFromDeck();
$d->GetCardFromDeck();
$d->printer();*/

//$d->pickUpDeck(3);


//unset($d);
$d->addJokers();

$d->addCardInDeck("A","♠");
$d->printer();
$d->addCardInDeck("R","J");
$d->addCardInDeck("A","♠");
$d->printer();
//var_dump($d);

