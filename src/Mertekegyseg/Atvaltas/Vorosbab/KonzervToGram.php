<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Vorosbab;

use PeterPecosz\Kajatervezo\Hozzavalo\HosszuSorok\VorosbabKonzerv;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class KonzervToGram extends MertekegysegValto
{
    #[\Override] public function canValt(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): bool
    {
        return $hozzavalo instanceof VorosbabKonzerv
               && $hozzaadottHozzavalo instanceof VorosbabKonzerv
               && $hozzavalo->getMertekegyseg() === Mertekegyseg::KONZERV
               && $hozzaadottHozzavalo->getMertekegyseg() === Mertekegyseg::G;
    }

    #[\Override] protected function getMultiplier(): float
    {
        return 250.0;
    }
}
