<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo\Hus;

use PeterPecosz\Kajatervezo\Hozzavalo\HosszuSorok\HosszuSorok;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class Serteszsir extends HosszuSorok
{
    public function __construct(float $mennyiseg, string $mertekegyseg = Mertekegyseg::DKG)
    {
        parent::__construct(static::name(), $mennyiseg, $mertekegyseg, static::kategoria());
    }

    #[\Override] public static function name(): string
    {
        return 'Sertészsír';
    }
}