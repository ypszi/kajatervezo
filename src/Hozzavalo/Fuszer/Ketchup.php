<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Fuszer;

use Override;

class Ketchup extends Fuszer
{
    #[Override] public static function name(): string
    {
        return 'Ketchup';
    }
}
