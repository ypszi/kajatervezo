<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Olaj;

class SzezamOlaj extends Olaj
{
    #[\Override] public static function name(): string
    {
        return 'Szezám olaj';
    }
}
