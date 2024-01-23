<?php

class MobileOperator
{
    const TITLE = 'Libyana';

    public function call(string $number)
    {
        echo "Calling $number from " . self::TITLE . "\n";
    }
}