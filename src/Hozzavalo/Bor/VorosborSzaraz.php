<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Bor;

class VorosborSzaraz extends Vorosbor
{
    #[\Override] public static function name(): string
    {
        return parent::name() . ' (száraz)';
    }
}