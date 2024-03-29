<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\Bors;
use PeterPecosz\Kajatervezo\Hozzavalo\FuszerEsOlaj\So;
use PeterPecosz\Kajatervezo\Hozzavalo\HosszuSorok\Cukor;
use PeterPecosz\Kajatervezo\Hozzavalo\Hutos\Tejfol;
use PeterPecosz\Kajatervezo\Hozzavalo\Hutos\TrappistaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\HutosUtan\Majonez;
use PeterPecosz\Kajatervezo\Hozzavalo\HutosUtan\Mustar;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Alma;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Dio;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Ecet;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Lilahagyma;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class DiosAlmasSajtsalata extends Etel
{
    #[\Override] public static function name(): string
    {
        return 'Diós-almás sajtsaláta';
    }

    #[\Override] protected static function listHozzavalok(): array
    {
        return [
            new Tejfol(450, Mertekegyseg::G),
            new Majonez(7, Mertekegyseg::EK),
            new Mustar(1, Mertekegyseg::EK),
            new Dio(100, Mertekegyseg::G),
            new TrappistaSajt(20, Mertekegyseg::DKG),
            new Alma(2, Mertekegyseg::DB),
            new Lilahagyma(1, Mertekegyseg::DB),
            new Cukor(2, Mertekegyseg::EK),
            new So(1, Mertekegyseg::TK),
            new Bors(1, Mertekegyseg::KK),
            new Ecet(1, Mertekegyseg::KK),
        ];
    }

    #[\Override] public static function defaultAdag(): int
    {
        return 6;
    }

    #[\Override] public function receptUrl(): string
    {
        return $this->decorateNoSaltyReceptUrl('https://www.nosalty.hu/recept/dios-almas-sajtsalata');
    }
}
