<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Supermarket\AuchanLuxembourg;

use PeterPecosz\Kajatervezo\Hozzavalo\Kategoria;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\FetaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\GoudaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\MozzarellaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\MozzarellaSajtReszelt;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\ParmezanSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\Sajt\TrappistaSajt;
use PeterPecosz\Kajatervezo\Hozzavalo\TartosElelmiszer\TonhalKonzerv;
use PeterPecosz\Kajatervezo\Hozzavalo\Tejtermek\Tojas;
use PeterPecosz\Kajatervezo\Supermarket\HozzavaloToKategoriaMap;

class AuchanLuxembourgHozzavaloToKategoriaMap extends HozzavaloToKategoriaMap
{
    /**
     * @return array<string, Kategoria>
     */
    protected function hozzavaloMap(): array
    {
        return [
            FetaSajt::name()              => AuchanLuxembourgKategoria::SAJT,
            GoudaSajt::name()             => AuchanLuxembourgKategoria::SAJT,
            MozzarellaSajt::name()        => AuchanLuxembourgKategoria::SAJT,
            MozzarellaSajtReszelt::name() => AuchanLuxembourgKategoria::SAJT,
            ParmezanSajt::name()          => AuchanLuxembourgKategoria::SAJT,
            Tojas::name()                 => AuchanLuxembourgKategoria::TARTOS_TEJTERMEK,
            TonhalKonzerv::name()         => AuchanLuxembourgKategoria::NEMZETKOZI,
            TrappistaSajt::name()         => AuchanLuxembourgKategoria::SAJT,
        ];
    }
}
