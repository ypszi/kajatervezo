<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\Bors;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\So;
use PeterPecosz\Kajatervezo\Hozzavalo\Olaj\OlivaOlaj;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Bulgur as NyersBulgur;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\HuslevesKocka;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Paprika;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Paradicsom;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Voroshagyma;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class Bulgur extends Etel
{
    #[Override] public static function name(): string
    {
        return 'Bulgur';
    }

    #[Override] protected function listHozzavalok(): array
    {
        return [
            new NyersBulgur(30, Mertekegyseg::DKG),
            new Voroshagyma(1, Mertekegyseg::DB),
            new Paradicsom(2, Mertekegyseg::DB),
            new Paprika(1, Mertekegyseg::DB),
            new OlivaOlaj(2, Mertekegyseg::EK),
            new HuslevesKocka(1, Mertekegyseg::DB),
            new So(0.5, Mertekegyseg::TK),
            new Bors(1, Mertekegyseg::CSIPET),
        ];
    }

    #[Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[Override] public function receptUrl(): string
    {
        return 'https://eletszepitok.hu/igy-keszul-a-paradicsomos-bulgur-azaz-a-torok-rizs/';
    }
}
