<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell;

use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class DarabToKilogram extends MertekegysegValto
{
    #[\Override] public function canValt(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): bool
    {
        return $hozzavalo->getNev() === Hozzavalo::CSIRKEMELL
               && $hozzaadottHozzavalo->getNev() === Hozzavalo::CSIRKEMELL
               && $hozzavalo->getMertekegyseg() === Mertekegyseg::DB
               && $hozzaadottHozzavalo->getMertekegyseg() === Mertekegyseg::KG;
    }

    #[\Override] protected function getMultiplier(): float
    {
        return 0.25;
    }
}