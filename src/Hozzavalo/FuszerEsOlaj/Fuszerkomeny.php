<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj;

class Fuszerkomeny extends Komenymag
{
    #[\Override] public static function name(): string
    {
        return 'Fűszerkömény';
    }
}
