<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\HuslevesKocka;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosTejtermek\Habtejszin;
use PeterPecosz\Kajatervezo\Hozzavalo\Tejtermek\Vaj;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Krumpli;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Porehagyma;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Zellerszar;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class PorehagymaLeves extends Etel
{
    #[Override] public static function name(): string
    {
        return 'Póréhagyma leves';
    }

    #[Override] protected static function listHozzavalok(): array
    {
        return [
            new Porehagyma(2, Mertekegyseg::DB),
            new Krumpli(2, Mertekegyseg::DB),
            new Zellerszar(1, Mertekegyseg::DB),
            new HuslevesKocka(1, Mertekegyseg::DB),
            new Vaj(3, Mertekegyseg::DKG),
            new Habtejszin(200, Mertekegyseg::ML),
        ];
    }

    #[Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[Override] public function receptUrl(): string
    {
        return $this->decorateNoSaltyReceptUrl('https://www.nosalty.hu/recept/klasszikus-porehagyma-kremleves');
    }
}
