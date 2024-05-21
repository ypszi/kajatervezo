<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Hozzavalo\Hus\Csirkemell;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class DekagramToDarab extends MertekegysegValto
{
    #[Override] public function canValt(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): bool
    {
        return $hozzavalo instanceof Csirkemell
               && $hozzaadottHozzavalo instanceof Csirkemell
               && $hozzavalo->getMertekegyseg() === Mertekegyseg::DKG
               && $hozzaadottHozzavalo->getMertekegyseg() === Mertekegyseg::DB;
    }

    #[Override] protected function getMultiplier(): float
    {
        return 0.04;
    }
}
