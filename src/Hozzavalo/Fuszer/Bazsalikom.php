<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Fuszer;

use Override;

class Bazsalikom extends Fuszer
{
    #[Override] public static function name(): string
    {
        return 'Bazsalikom';
    }
}