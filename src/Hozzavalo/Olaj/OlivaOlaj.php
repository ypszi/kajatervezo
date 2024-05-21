<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Olaj;

use Override;

class OlivaOlaj extends Olaj
{
    #[Override] public static function name(): string
    {
        return 'Olíva olaj';
    }
}
