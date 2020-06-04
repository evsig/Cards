<?php
echo 'Cards';

require 'Deck.php';
use Cards\Deck as Deck;

$d = new Deck();

//$d->fillDeck();

//$d->ShakeDeck();
//$d->PutCardInDeck();

$d->addJokers();
$d->printer();
$d->GetCardFromDeck();
$d->printer();
$d->GetCardFromDeck();
//$d->pickUpDeck(3);


//unset($d);
//$d->PutCardInDeck("B","J");

$d->GetCardFromDeck();
$d->GetCardFromDeck();
$d->printer();

//var_dump($d);