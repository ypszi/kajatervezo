<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\So;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Buzadara;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Cukor;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Kakaopor;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosTejtermek\Tej;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class Tejbegriz extends Etel
{
    #[Override] public static function name(): string
    {
        return 'Tejbegríz';
    }

    #[Override] protected function listHozzavalok(): array
    {
        return [
            new Tej(5, Mertekegyseg::DL),
            new Cukor(2, Mertekegyseg::EK),
            new Buzadara(4, Mertekegyseg::EK),
            new So(1, Mertekegyseg::CSIPET),
            new Kakaopor(2, Mertekegyseg::TK),
        ];
    }

    #[Override] public static function defaultAdag(): int
    {
        return 2;
    }

    #[Override] public function receptUrl(): string
    {
        return 'https://www.mindmegette.hu/tejbegriz.recept/';
    }
}
