<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use PeterPecosz\Kajatervezo\Hozzavalo\Citrom;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Hozzavalo\Jegsalata;
use PeterPecosz\Kajatervezo\Hozzavalo\Kigyouborka;
use PeterPecosz\Kajatervezo\Hozzavalo\Koktelparadicsom;
use PeterPecosz\Kajatervezo\Hozzavalo\Lilahagyma;
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
            new Hozzavalo(Hozzavalo::OLIVA_OLAJ, 3, Mertekegyseg::EK),
            // oregano ízlés szerint
            new Hozzavalo(Hozzavalo::OREGANO, 1, Mertekegyseg::TK),
            new Hozzavalo(Hozzavalo::CSIRKEMELL, 50, Mertekegyseg::DKG),
            new Hozzavalo(Hozzavalo::NATUR_JOGHURT, 37.5, Mertekegyseg::DKG),
            new Hozzavalo(Hozzavalo::FETA_SAJT, 20, Mertekegyseg::DKG),
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
