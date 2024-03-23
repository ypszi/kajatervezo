<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use PeterPecosz\Kajatervezo\Hozzavalo\Fokhagyma;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Hozzavalo\Voroshagyma;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class ChilisBab extends Etel
{
    #[\Override] public static function name(): string
    {
        return 'Chilis bab';
    }

    #[\Override] protected static function listHozzavalok(): array
    {
        return [
            new Voroshagyma(2, Mertekegyseg::DB),
            new Hozzavalo(Hozzavalo::NAPRAFORGO_OLAJ, 3, Mertekegyseg::EK),
            new Fokhagyma(4, Mertekegyseg::GEREZD),
            new Hozzavalo(Hozzavalo::PIROS_PAPRIKA, 1, Mertekegyseg::TK),
            new Hozzavalo(Hozzavalo::DARALT_HUS, 50, Mertekegyseg::DKG),
            new Hozzavalo(Hozzavalo::PARADICSOM_PURE, 10, Mertekegyseg::DKG),
            new Hozzavalo(Hozzavalo::CHILI, 1, Mertekegyseg::TK),
            new Hozzavalo(Hozzavalo::VOROSBAB, 2, Mertekegyseg::KONZERV),
            new Hozzavalo(Hozzavalo::KUKORICA, 1, Mertekegyseg::KONZERV),
        ];
    }

    #[\Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[\Override] public function receptUrl(): string
    {
        return 'https://www.mindmegette.hu/chilis-bab.recept/';
    }
}
