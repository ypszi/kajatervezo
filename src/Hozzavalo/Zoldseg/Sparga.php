<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg;

use Override;

class Sparga extends Zoldseg
{
    #[Override] public static function name(): string
    {
        return 'Spárga';
    }
}
