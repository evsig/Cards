<?php
echo 'Cards';

require 'Deck.php';
use Cards\Deck as Deck;

$d = new Deck();

$d->FillDeck();

$d->ShakeDeck();
//$d->PutCardInDeck();
//$d->GetCardFromDeck();
print_r($d);
$d->PickUpDeck(3);

print_r($d);
