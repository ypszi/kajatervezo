<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\Bors;
use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\So;
use PeterPecosz\Kajatervezo\Hozzavalo\HosszuSorok\Rizs as HozzavaloRizs;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class Rizs extends Etel
{
    #[\Override] public static function name(): string
    {
        return 'Rizs';
    }

    #[\Override] protected static function listHozzavalok(): array
    {
        return [
            new HozzavaloRizs(200, Mertekegyseg::G),
            new So(1, Mertekegyseg::KK),
            new Bors(1, Mertekegyseg::CSIPET),
        ];
    }

    #[\Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[\Override] public function receptUrl(): string
    {
        return '';
    }
}