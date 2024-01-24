<?php

namespace Madar;

class MobileOperator
{
    const TITLE = 'Madar';

    public function call(string $number)
    {
        echo "Calling $number from " . self::TITLE . "\n";
    }
}