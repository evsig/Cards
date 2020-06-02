<?php
echo 'Cards';

require 'Deck.php';
use Cards\Deck as Deck;

$d = new Deck();
$d->printer();
