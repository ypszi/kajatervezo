<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj;

class Komenymag extends FuszerEsOlaj
{
    #[\Override] public static function name(): string
    {
        return 'Köménymag';
    }
}
