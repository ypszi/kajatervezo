<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Felvagott;

use Override;

class BaconSzeletelt extends Felvagott
{
    #[Override] public static function name(): string
    {
        return 'Bacon (szeletelt)';
    }
}