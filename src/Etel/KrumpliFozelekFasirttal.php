<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

use Override;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\Baberlevel;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\FuszerPaprika;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\Majoranna;
use PeterPecosz\Kajatervezo\Hozzavalo\Fuszer\So;
use PeterPecosz\Kajatervezo\Hozzavalo\Olaj\NapraforgoOlaj;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\Finomliszt;
use PeterPecosz\Kajatervezo\Hozzavalo\Tejtermek\Tejfol;
use PeterPecosz\Kajatervezo\Hozzavalo\Zoldseg\Burgonya;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class KrumpliFozelekFasirttal extends Etel
{
    #[Override] public static function name(): string
    {
        return 'Krumpli főzelék fasírttal';
    }

    #[Override] protected static function listHozzavalok(): array
    {
        return array_merge(
            [
                new NapraforgoOlaj(2, Mertekegyseg::EK),
                new FuszerPaprika(1, Mertekegyseg::TK),
                new Burgonya(70, Mertekegyseg::DKG),
                new Majoranna(2, Mertekegyseg::EK),
                new Baberlevel(3, Mertekegyseg::DB),
                // só ízlés szerint
                new So(1, Mertekegyseg::KK),
                new Tejfol(2, Mertekegyseg::DL),
                new Finomliszt(1.5, Mertekegyseg::DKG),
                // 4 dl víz (kb.)
            ],
            (new Fasirt(static::defaultAdag()))->hozzavalok()
        );
    }

    #[Override] public static function defaultAdag(): int
    {
        return 4;
    }

    #[Override] public function receptUrl(): string
    {
        return $this->decorateNoSaltyReceptUrl('https://www.nosalty.hu/recept/legegyszerubb-krumplifozelek');
    }
}
