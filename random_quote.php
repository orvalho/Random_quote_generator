<?php

$file = 'quotes.txt';

$quotes = explode("\n", file_get_contents($file));
$quotes = array_filter($quotes); // removes blank lines from array

$randomKey = array_rand($quotes);
$randomQuote = $quotes[$randomKey];

list($quoteText, $quoteAuthor) = explode(" //", $randomQuote);
