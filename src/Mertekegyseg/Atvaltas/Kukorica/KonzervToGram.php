<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kukorica;

use PeterPecosz\Kajatervezo\Hozzavalo\HosszuSorok\KukoricaKonzerv;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class KonzervToGram extends MertekegysegValto
{
    #[\Override] public function canValt(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): bool
    {
        return $hozzavalo instanceof KukoricaKonzerv
               && $hozzaadottHozzavalo instanceof KukoricaKonzerv
               && $hozzavalo->getMertekegyseg() === Mertekegyseg::KONZERV
               && $hozzaadottHozzavalo->getMertekegyseg() === Mertekegyseg::G;
    }

    #[\Override] protected function getMultiplier(): float
    {
        return 140.0;
    }
}
