<?php
echo 'Cards';

require 'Deck.php';
use Cards\Deck as Deck;

$d = new Deck();

$d->fillDeck();

//$d->ShakeDeck();
//$d->PutCardInDeck();

//$d->GetCardFromDeck();
$d->printer();
$d->pickUpDeck(3);

//$d->addJokers();

$d->printer();


//print_r($d);
//var_dump($d);
