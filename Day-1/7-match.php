<?php
$food = 'cake';

$return_value = match ($food) {
   'apple' => 'This food is an apple',
   'bar' => 'This food is a bar',
   'cake', 'cookie' => 'This food is a cake',
   default => 'I don\'t know',
};

echo $return_value;