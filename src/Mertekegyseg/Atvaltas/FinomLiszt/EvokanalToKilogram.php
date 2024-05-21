<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\FinomLiszt;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Finomliszt;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class EvokanalToKilogram extends MertekegysegValto
{
    #[Override] public function canValt(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): bool
    {
        return $hozzavalo instanceof Finomliszt
               && $hozzaadottHozzavalo instanceof FinomLiszt
               && $hozzavalo->getMertekegyseg() === Mertekegyseg::EK
               && $hozzaadottHozzavalo->getMertekegyseg() === Mertekegyseg::KG;
    }

    #[Override] protected function getMultiplier(): float
    {
        return 0.02;
    }
}
