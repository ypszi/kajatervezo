<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\OlivaOlaj;
use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\Oregano;
use PeterPecosz\Kajatervezo\Hozzavalo\Hus\Csirkemell;
use PeterPecosz\Kajatervezo\Hozzavalo\Hutos\FetaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\Hutos\NaturJoghurt;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Citrom;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Jegsalata;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Kigyouborka;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Koktelparadicsom;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Lilahagyma;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class CitromosJoghurtosCsirkemell extends Etel
{
    #[\Override] public static function name(): string
    {
        return 'Citromos joghurtos csirkemell';
    }

    #[\Override] protected static function listHozzavalok(): array
    {
        return [
            new Citrom(1, Mertekegyseg::DB),
            new Jegsalata(1, Mertekegyseg::DB),
            new Kigyouborka(1, Mertekegyseg::DB),
            new Koktelparadicsom(40, Mertekegyseg::DKG),
            new Lilahagyma(1, Mertekegyseg::DB),
            new OlivaOlaj(3, Mertekegyseg::EK),
            // oregano ízlés szerint
            new Oregano(1, Mertekegyseg::TK),
            new Csirkemell(50, Mertekegyseg::DKG),
            new NaturJoghurt(37.5, Mertekegyseg::DKG),
            new FetaSajt(20, Mertekegyseg::DKG),
        ];
    }

    #[\Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[\Override] public function receptUrl(): string
    {
        return 'https://www.mindmegette.hu/citromos-joghurtos-csirkemell-gorogsalataval.recept/';
    }
}
