<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg;

class Ecet extends Zoldseg
{
    #[\Override] public static function name(): string
    {
        return 'Ecet';
    }
}
