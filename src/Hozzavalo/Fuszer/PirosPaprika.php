<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Fuszer;

use Override;

class PirosPaprika extends Fuszer
{
    #[Override] public static function name(): string
    {
        return 'Piros paprika';
    }
}
