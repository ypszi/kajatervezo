<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Fuszer;

class So extends Fuszer
{
    #[\Override] public static function name(): string
    {
        return 'Só';
    }
}
